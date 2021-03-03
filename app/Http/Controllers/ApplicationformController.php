<?php

namespace App\Http\Controllers;

use App\ration;
use Illuminate\Http\Request;

class RationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return ('layout');
    }
public function list()
{
    return view('list');
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
     * @param  \App\ration  $ration
     * @return \Illuminate\Http\Response
     */
    public function show(ration $ration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ration  $ration
     * @return \Illuminate\Http\Response
     */
    public function edit(ration $ration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ration  $ration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ration $ration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ration  $ration
     * @return \Illuminate\Http\Response
     */
    public function destroy(ration $ration)
    {
        //
    }
}
