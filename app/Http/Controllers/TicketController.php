<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TicketController extends Controller
{
    public function admin()
    {
        $events = Event::orderBy('id')->with('tickets')->paginate(10);

        return view('admin.tickets.index', [
            'events' => $events
        ]);
    }
}