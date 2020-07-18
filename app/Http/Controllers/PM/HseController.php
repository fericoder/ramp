<?php

namespace App\Http\Controllers\PM;

use App\Hse;
use Illuminate\Http\Request;

class HseController extends  \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pm.hse');
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
     * @param  \App\Hse  $hse
     * @return \Illuminate\Http\Response
     */
    public function show(Hse $hse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hse  $hse
     * @return \Illuminate\Http\Response
     */
    public function edit(Hse $hse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hse  $hse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hse $hse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hse  $hse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hse $hse)
    {
        //
    }
}
