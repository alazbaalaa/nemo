<?php

namespace App\Http\Controllers;

use App\Models\NoteWarning;
use Illuminate\Http\Request;

class NoteWarningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return response()->json(NoteWarning::all());

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json(NoteWarning::findOrFail($noteWarning));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $noteWarning = NoteWarning::create($request->all());
         return response()->json($noteWarning, 201); // Created

    }

    /**
     * Display the specified resource.
     */
    public function show(NoteWarning $noteWarning)
    {
        return NoteWarning::findOrFail($noteWarning);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NoteWarning $noteWarning)
    {
        $note = NoteWarning::findOrFail($noteWarning);
       return view('note-warnings.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NoteWarning $noteWarning)
    {
        $note = NoteWarning::findOrFail($noteWarning);
        $note->update($request->all());
        return response()->json($noteWarning);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NoteWarning $noteWarning)
    {
        NoteWarning::destroy($noteWarning);
       return response()->json(['message' => 'NoteWarning deleted']);
    }
}
