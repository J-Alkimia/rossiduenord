<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\praticeSoggetti;
use Illuminate\Http\Request;

class PraticeSoggettiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('business.soggetti.index');
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
        return view('business.soggetti.show');
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
     * @param  \App\praticeSoggetti  $praticeSoggetti
     * @return \Illuminate\Http\Response
     */
    public function show(praticeSoggetti $praticeSoggetti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\praticeSoggetti  $praticeSoggetti
     * @return \Illuminate\Http\Response
     */
    public function edit(praticeSoggetti $praticeSoggetti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\praticeSoggetti  $praticeSoggetti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, praticeSoggetti $praticeSoggetti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\praticeSoggetti  $praticeSoggetti
     * @return \Illuminate\Http\Response
     */
    public function destroy(praticeSoggetti $praticeSoggetti)
    {
        //
    }
}
