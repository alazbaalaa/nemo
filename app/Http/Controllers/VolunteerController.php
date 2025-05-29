<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return response()->json(Volunteer::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Volunteer $volunteer)
    {
         return response()->json(Volunteer::findOrFail($volunteer));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $volunteer = Volunteer::create($request->all());
         return response()->json($volunteer, 201); // Created
    }

    /**
     * Display the specified resource.
     */
    public function show(Volunteer $volunteer)
    {
        return Volunteer::findOrFail($volunteer);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Volunteer $volunteer)
    {
        $volunteer = Volunteer::findOrFail($volunteer);
        return view('volunteers.edit', compact('volunteer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Volunteer $volunteer)
    {
        $volunteer = Volunteer::findOrFail($volunteer);
        $volunteer->update($request->all());
        return response()->json($volunteer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Volunteer $volunteer)
    {
        Volunteer::destroy($volunteer);
       return response()->json(['message' => 'Volunteer deleted']);
    }
}

