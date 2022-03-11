<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Immobile;
use Illuminate\Http\Request;

class ImmobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('business.immobileTab.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function test()
    {
        return view('business.immobileTab.show');
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
     * @param  \App\Immobile  $immobile
     * @return \Illuminate\Http\Response
     */
    public function show(Immobile $immobile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Immobile  $immobile
     * @return \Illuminate\Http\Response
     */
    public function edit(Immobile $immobile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Immobile  $immobile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Immobile $immobile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Immobile  $immobile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Immobile $immobile)
    {
        //
    }
}
