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
        $notes = NoteWarning::all();
        return view('note-warnings.index', compact('notes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('note-warnings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        NoteWarning::create($request->all());
        return redirect()->route('note-warnings.index');

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
         return redirect()->route('note-warnings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NoteWarning $noteWarning)
    {
        NoteWarning::destroy($noteWarning);
        return redirect()->route('note-warnings.index');
    }
}
