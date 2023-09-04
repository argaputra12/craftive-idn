<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\DB;
use App\Models\Ticket;
use App\Models\Event;
use App\Models\TicketBuyer;
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
    public function index()
    {
        return view('order.index');
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


        return view('order.create', [
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

        $xenditPayload = [
            'external_id' => Str::uuid(),
            'payer_email' => $request->email,
            'description' => 'Pembelian tiket ' . $event->name,
            'amount' => $totalPrice,
            'should_send_email' => true,
        ];

        $createInvoice = \Xendit\Invoice::create($xenditPayload);


        $ticketBuyer = TicketBuyer::create([
            'user_id' => auth()->user()->id,
            'name' => $request->full_name,
            'phone_number' => $request->phone,
            'nik' => $request->nik,
        ]);

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'ticket_id' => $request->ticket_id,
            'ticket_buyer_id' => $ticketBuyer->id,
            'quantity' => $request->quantity,
            'price' => $ticket->price,
            'total_price' => $totalPrice,
            'invoice_url' => $createInvoice['invoice_url'],
            'external_id' => $createInvoice['external_id'],
        ]);

        return redirect()->away($createInvoice['invoice_url']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
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
}
