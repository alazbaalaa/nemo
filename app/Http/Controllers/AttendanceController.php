<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return response()->json(Attendance::all());

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json(Attendance::findOrFail($volattendanceunteer));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $attendance = Attendance::create($request->all());
         return response()->json($attendance, 201); // Created
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendance $attendance)
    {
         return Attendance::findOrFail($attendance);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendance $attendance)
    {
        $attendance = Attendance::findOrFail($attendance);
        return view('attendances.edit', compact('attendance'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendance $attendance)
    {
        $attendance = Attendance::findOrFail($attendance);
        $attendance->update($request->all());
         return response()->json($attendance);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendance $attendance)
    {
        Attendance::destroy($attendance);
       return response()->json(['message' => 'Attendance deleted']);
    }
}

