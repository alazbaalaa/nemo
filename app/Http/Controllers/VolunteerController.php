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
       $volunteers = Volunteer::all();
       return view('volunteers.index', compact('volunteers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('volunteers.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Volunteer::create($request->all());
        return redirect()->route('volunteers.index');
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
        return redirect()->route('volunteers.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Volunteer $volunteer)
    {
        Volunteer::destroy($volunteer);
        return redirect()->route('volunteers.index');
    }
}

