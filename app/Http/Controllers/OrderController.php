<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\DB;
use App\Models\Ticket;
use App\Models\Event;
use App\Models\TicketBuyer;
use Carbon\Carbon;
use Xendit\Xendit;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function __construct()
    {
        Xendit::setApiKey(env('XENDIT_API_KEY'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // get status from query string
        $status = $request->query('status');

        $userId = auth()->user()->id;

        $orders = Order::where('user_id', $userId)
            ->when($status, function ($query, $status) {
                return $query->where('status', $status);
            })
            ->with('ticket.event')
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        return view('orders.index', [
            'orders' => $orders,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(String $ticketId)
    {
        $ticket = Ticket::findOrFail($ticketId);
        $event = Event::whereHas('tickets', function ($query) use ($ticketId) {
            $query->where('id', $ticketId);
        })->firstOrFail();

        $ticket->event = $event;


        return view('orders.create', [
            'ticket' => $ticket,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ticket_id' => 'required|integer',
            'email' => 'required|email',
            'full_name' => 'required|string',
            'phone' => 'required|string',
            'nik' => 'required|string',
            'quantity' => 'required|integer',
        ]);

        $ticket = Ticket::findOrFail($request->ticket_id);

        $totalPrice = $ticket->price * $request->quantity;

        $event = Event::whereHas('tickets', function ($query) use ($request) {
            $query->where('id', $request->ticket_id);
        })->firstOrFail();

        // check if ticket is still available
        if ($ticket->stock < $request->quantity) {
            return redirect()->back()->with('error', 'Tiket yang tersedia hanya ' . $ticket->stock);
        }

        $xenditPayload = [
            'external_id' => Str::uuid(),
            'payer_email' => $request->email,
            'description' => 'Pembelian tiket ' . $event->name,
            'amount' => $totalPrice,
            'should_send_email' => true,
            'success_redirect_url' => route('orders.index'),
            'failure_redirect_url' => route('orders.index'),
            'invoice_duration' => 3600,
        ];

        $invoice = \Xendit\Invoice::create($xenditPayload);

        if(!TicketBuyer::where('user_id', auth()->user()->id)->first()){
          $ticketBuyer = TicketBuyer::create([
              'user_id' => auth()->user()->id,
              'name' => $request->full_name,
              'phone_number' => $request->phone,
              'nik' => $request->nik,
          ]);
        }

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'ticket_id' => $request->ticket_id,
            'ticket_buyer_id' => $ticketBuyer->id,
            'quantity' => $request->quantity,
            'price' => $ticket->price,
            'total_price' => $totalPrice,
            'invoice_url' => $invoice['invoice_url'],
            'external_id' => $invoice['external_id'],
        ]);

        // reduce stock
        $ticket->decrement('stock', $request->quantity);

        return redirect()->away($invoice['invoice_url']);
    }



    /**
     * Display the specified resource.
     */
    public function show(String $orderId)
    {
        $userId = auth()->user()->id;
        $order = Order::where(
            'id',
            $orderId
        )->where('user_id', $userId)
            ->with('ticketBuyer')
            ->with('ticket.event')->firstOrFail();
        return view('orders.show', [
            'order' => $order,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }

    public function webhook(Request $request)
    {
        $headers = $request->headers->all();
        // if has header x-callback-token
        if (!isset($headers['x-callback-token'])) {
            return response()->json([
                'message' => 'invalid token',
            ], 401);
        }

        $callbackToken = $headers['x-callback-token'][0];
        // check if x-callback-token is valid
        if ($callbackToken != env('XENDIT_WEBHOOK_VERIFICATION_TOKEN')) {
            return response()->json([
                'message' => 'invalid token',
            ], 401);
        }

        $decodedRequest = json_decode(request()->getContent(), true);

        $xenditInvoiceId = $decodedRequest['id'];

        $xenditInvoice = null;

        try {
            $xenditInvoice = \Xendit\Invoice::retrieve($xenditInvoiceId);

            // You can use $xenditInvoice here if it was retrieved successfully

        } catch (\Xendit\Exceptions\ApiException $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 404);
        } catch (\Exception $e) {
            // Handle other exceptions
            // You can log the error or take other appropriate actions
            return response()->json([
                'message' => $e->getMessage()
            ], 404);
        }



        $order = Order::where('external_id', $xenditInvoice['external_id'])->firstOrFail();
        $ticket = Ticket::where('id', $order->ticket_id)->firstOrFail();

        if (!$order) {
            return response()->json([
                'message' => 'order not found',
            ], 404);
        }

        // lower case the status
        $status = $xenditInvoice['status'];

        if ($status == 'EXPIRED') {
            $order->update([
                'status' => 'expired',
            ]);
            $ticket->increment('stock', $order->quantity);
        } else {
            $paidAt = Carbon::parse($xenditInvoice['paid_at']);
            $order->update([
                'status' => $status == 'SETTLED' || $status == 'PAID' ? 'paid' : 'pending',
                'paid_at' => $paidAt,
            ]);
        }


        return response()->json([
            'message' => 'success',
        ]);
    }

    public function admin()
    {
        $orders = Order::orderBy('created_at', 'desc')->paginate(8);

        return view('admin.orders.index', compact('orders'));
    }
}