<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use App\Models\EventCategory;
use App\Models\Category;
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

    public function admin()
    {
        // get EventCategory with Events (order by id event)
        $events = Event::whereHas('eventCategory')->with('eventCategory')->paginate(10);

        foreach($events as $event) {
            foreach($event->eventCategory as $eventCategory) {
                $category = Category::where('id', $eventCategory->category_id)->first();

                $eventCategory->category_name = $category->name;

            }
        }

        return view('admin.events.index', [
            'events' => $events
        ]);
    }
}
