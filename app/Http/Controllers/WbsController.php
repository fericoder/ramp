<?php

namespace App\Http\Controllers;

use App\Wbs;
use Illuminate\Http\Request;

class WbsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('wbs');
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
     * @param  \App\Wbs  $wbs
     * @return \Illuminate\Http\Response
     */
    public function show(Wbs $wbs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wbs  $wbs
     * @return \Illuminate\Http\Response
     */
    public function edit(Wbs $wbs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wbs  $wbs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wbs $wbs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wbs  $wbs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wbs $wbs)
    {
        //
    }
}
