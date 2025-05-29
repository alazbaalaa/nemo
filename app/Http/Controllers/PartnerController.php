<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Partner::all());

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return response()->json(Partner::findOrFail($partner));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $partner = Partner::create($request->all());
         return response()->json($partner, 201); // Created;

    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        return Partner::findOrFail($partner);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        $partner = Partner::findOrFail($id);
        return view('partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        $partner = Partner::findOrFail($partner);
        $partner->update($request->all());
        return response()->json($partner);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        Partner::destroy($partner);
        return response()->json(['message' => 'Partner deleted']);
    }
}
