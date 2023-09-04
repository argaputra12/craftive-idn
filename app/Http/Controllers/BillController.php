<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Event;
use App\Models\Bill;
use App\Http\Controllers\Controller;
use App\Models\PaymentMethod;
use RealRashid\SweetAlert\Facades\Alert;

class BillController extends Controller
{
    public function index(String $id, Request $request)
    {
        // if user not logged in, redirect to login page
        if (!$request->session()->has('user')) {
            return redirect('login')->withToastError('Kamu harus login terlebih dahulu untuk melanjutkan pembayaran!');
        }

        $ticket = Ticket::findOrFail($id);
        $event = Event::whereHas('tickets', function ($query) use ($id) {
            $query->where('id', $id);
        })->firstOrFail();

        $ticket->event = $event;

        $payment_method = PaymentMethod::all();

        $kode_unik = rand(100, 999);

        return view('checkout.index', [
            'ticket' => $ticket,
            'payment_method' => $payment_method,
            'kode_unik' => $kode_unik,
        ]);
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function admin()
    {
        $bills = Bill::all();

        return view('admin.bills', [
            'bills' => $bills
        ]);
    }
}
