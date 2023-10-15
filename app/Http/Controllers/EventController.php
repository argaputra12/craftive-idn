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
    $events = Event::whereHas('eventCategory')->with('eventCategory')->orderBy('created_at', 'desc')->paginate(10);

    foreach ($events as $event) {
      foreach ($event->eventCategory as $eventCategory) {
        $category = Category::where('id', $eventCategory->category_id)->first();

        $eventCategory->category_name = $category->name;
      }
    }

    return view('admin.events.index', [
      'events' => $events
    ]);
  }

  public function create()
  {
    $categories = Category::orderBy('name')->get();

    return view('admin.events.create', [
      'categories' => $categories
    ]);
  }

  public function store(Request $request)
  {

    $validated = $request->validate([
      'name' => 'required|string|max:255|unique:events',
      'description' => 'required|string',
      'date' => 'required|date',
      'location' => 'required|string|max:255',
      'city' => 'required|string|max:255',
      'province' => 'required|string|max:255',
      'categories' => 'required|array',
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    $filename = $request->file('image')->getClientOriginalName();
    $request->file('image')->storeAs('/public/images/events', $filename);
    // dd('file uploaded');
    $filepath = 'storage/images/events/' . $filename;


    $event = Event::create([
      'name' => $request->name,
      'description' => $request->description,
      'date' => $request->date,
      'location' => $request->location,
      'city' => $request->city,
      'province' => $request->province,
      'image_url' => $filepath
    ]);

    foreach ($request->categories as $category) {
      EventCategory::create([
        'event_id' => $event->id,
        'category_id' => $category
      ]);
    }

    return redirect()->route('admin.events');
  }

  public function edit(String $id)
  {
    $event = Event::find($id);
    $categories = Category::orderBy('name')->get();

    return view('admin.events.edit', [
      'event' => $event,
      'categories' => $categories
    ]);
  }

  public function update(String $id, Request $request)
  {
    $validated = $request->validate([
      'name' => 'required|string|max:255',
      'description' => 'required|string',
      'date' => 'required|date',
      'location' => 'required|string|max:255',
      'city' => 'required|string|max:255',
      'province' => 'required|string|max:255',
      'categories' => 'required|array',
      'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    $event = Event::find($id);

    // udpate all fields except image
    $event->update([
      'name' => $request->name,
      'description' => $request->description,
      'date' => $request->date,
      'location' => $request->location,
      'city' => $request->city,
      'province' => $request->province,
    ]);

    // if image is updated
    if ($request->file('image')) {

      // delete old image
      $old_image = $event->image_url;
      unlink($old_image);

      $filename = $request->file('image')->getClientOriginalName();
      $request->file('image')->storeAs('/public/images/events', $filename);
      $filepath = 'storage/images/events/' . $filename;

      $event->update([
        'image_url' => $filepath
      ]);
    }

    return redirect()->route('admin.events')->with('success', 'Event updated successfully');
  }

  public function destroy(String $id)
  {
    $event = Event::find($id);
    $event->delete();

    return redirect()->route('admin.events');
  }
}