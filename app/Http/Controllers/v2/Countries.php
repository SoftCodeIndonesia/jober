<?php

namespace App\Http\Controllers\v2;

use Illuminate\Http\Request;
use App\Models\CountriesModel;
use App\Http\Controllers\Controller;
use Stevebauman\Location\Facades\Location;

class Countries extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CountriesModel  $countriesModel
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $userIp = $request->ip();
        $locationData = Location::get();
        
        dd($locationData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CountriesModel  $countriesModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CountriesModel $countriesModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CountriesModel  $countriesModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CountriesModel $countriesModel)
    {
        //
    }
}