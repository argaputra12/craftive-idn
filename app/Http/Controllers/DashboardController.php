<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EventCategory;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->category && $request->category != 'Semua Kategori') {
            return $this->filter($request);
        }

        $events = Event::whereHas('tickets')->orderBy('created_at', 'desc')->paginate(8);

        $categories = Category::all();
        $categories->prepend((object) [
            'name' => 'Semua Kategori',
            'image_url' => 'storage/images/bali-arts.jpg',
        ]);

        return view('dashboard', [
            'events' => $events,
            'categories' => $categories,
        ]);
    }

    public function filter(Request $request)
    {

        // category where name like $request->category
        $category = Category::where('name', 'like', '%' . $request->category . '%')->first();
        $eventCategories = EventCategory::where('category_id', $category->id)->get();

        // paginate all event where in eventCategories
        $events = Event::whereHas('tickets')->whereIn('id', $eventCategories->pluck('event_id'))->orderBy('created_at', 'desc')->paginate(8);

        foreach ($events as $event) {
            $tickets = Ticket::where('event_id', $event->id)->orderBy('price', 'asc')->get();
            $event->tickets = $tickets;
        }

        $categories = Category::all();
        $categories->prepend((object) [
            'name' => 'Semua Kategori',
            'image_url' => 'storage/images/bali-arts.jpg',
        ]);

        return view('dashboard', [
            'events' => $events,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function admin()
    {
        return view('admin.dashboard');
    }
}