<?php

namespace App\Http\Controllers\Project;

use App\Avl;
use Illuminate\Http\Request;

class AvlController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avls = Avl::all();
        return view('project.procurement.avl', compact('avls'));
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
     * @param  \App\Avl  $avl
     * @return \Illuminate\Http\Response
     */
    public function show(Avl $avl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Avl  $avl
     * @return \Illuminate\Http\Response
     */
    public function edit(Avl $avl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Avl  $avl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avl $avl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Avl  $avl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avl $avl)
    {
        //
    }
}
