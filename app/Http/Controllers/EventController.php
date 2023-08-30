<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index(String $id)
    {
        $event = Event::find($id);
        $tickets = Ticket::where('event_id', $id)->get();

        return view('events.index', [
            'event' => $event,
            'tickets' => $tickets
        ]);
    }

    

}