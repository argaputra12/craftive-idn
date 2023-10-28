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
        $events = Event::orderBy('created_at', 'desc')->whereHas('tickets')->with('tickets')->paginate(10);

        return view('admin.tickets.index', [
            'events' => $events
        ]);
    }

    public function create()
    {
        $events = Event::orderBy('id')->get();

        return view('admin.tickets.create', [
            'events' => $events
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'registration_closed_at' => 'required|date',
        ]);

        $event_id = Event::where('name', $request->event_name)->first()->id;

        Ticket::create([
            'event_id' => $event_id,
            'price' => $request->price,
            'stock' => $request->stock,
            'name' => $request->name ?? null,
            'registration_closed_at' => $request->registration_closed_at ,
        ]);

        return redirect()->route('admin.tickets')->with('success', 'Ticket created successfully!');
    }

    public function edit(String $string)
    {
        $ticket = Ticket::find($string);
        $events = Event::orderBy('id')->get();

        return view('admin.tickets.edit', [
            'ticket' => $ticket,
            'events' => $events
        ]);
    }

    public function update(String $string, Request $request)
    {
        $request->validate([
            'event_name' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'name' => 'nullable|string',
            'registration_closed_at' => 'required|date',
        ]);

        $event_id = Event::where('name', $request->event_name)->first()->id;

        $ticket = Ticket::find($string);

        $ticket->update([
            'event_id' => $event_id,
            'price' => $request->price,
            'stock' => $request->stock,
            'name' => $request->name ?? null,
            'registration_closed_at' => $request->registration_closed_at ,
        ]);

        return redirect()->route('admin.tickets')->with('success', 'Ticket updated successfully!');
    }

    public function destroy($id)
    {
        $ticket = Ticket::find($id);

        $ticket->delete();

        return redirect()->route('admin.tickets')->with('success', 'Ticket deleted successfully!');
    }
}