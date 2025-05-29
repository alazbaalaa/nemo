<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evaluations = Evaluation::all();
        return view('evaluations.index', compact('evaluations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('evaluations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Evaluation::create($request->all());
        return redirect()->route('evaluations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evaluation $evaluation)
    {
        return Evaluation::findOrFail($evaluation);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evaluation $evaluation)
    {
        $evaluation = Evaluation::findOrFail($evaluation);
        return view('evaluations.edit', compact('evaluation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evaluation $evaluation)
    {
        $evaluation = Evaluation::findOrFail($evaluation);
        $evaluation->update($request->all());
        return redirect()->route('evaluations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evaluation $evaluation)
    {
        Evaluation::destroy($evaluation);
        return redirect()->route('evaluations.index');
    }
}
