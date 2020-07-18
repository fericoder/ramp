<?php

namespace App\Http\Controllers;

use App\Calendarevent;
use Illuminate\Http\Request;

class CalendareventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('calendar');
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
     * @param  \App\Calendarevent  $calendarevent
     * @return \Illuminate\Http\Response
     */
    public function show(Calendarevent $calendarevent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Calendarevent  $calendarevent
     * @return \Illuminate\Http\Response
     */
    public function edit(Calendarevent $calendarevent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Calendarevent  $calendarevent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calendarevent $calendarevent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Calendarevent  $calendarevent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calendarevent $calendarevent)
    {
        //
    }
}
