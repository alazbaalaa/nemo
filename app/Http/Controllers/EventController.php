<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Event::all());

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return response()->json(Event::findOrFail($event));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = Event::create($request->all());
         return response()->json($event, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
          return Event::findOrFail($event);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $event = Event::findOrFail($event);
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $event = Event::findOrFail($event);
        $event->update($request->all());
       return response()->json($event);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        Event::destroy($event);
        return response()->json(['message' => 'Event deleted']);
    }
}
