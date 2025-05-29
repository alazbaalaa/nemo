<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Campaign::all();
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
        return Campaign::create($request->all());


    }

    /**
     * Display the specified resource.
     */
    public function show(Campaign $campaign)
    {
        return Campaign::findOrFail($campaign);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campaign $campaign)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Campaign $campaign)
    {
        $campaign = Campaign::findOrFail($campaign);
        $campaign->update($request->all());
        return $campaign;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campaign $campaign)
    {
        Campaign::destroy($campaign);
        return response()->json(['message' => 'deleted succesfully']);
    }
}
