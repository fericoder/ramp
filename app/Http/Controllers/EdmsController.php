<?php

namespace App\Http\Controllers;

use App\Edms;
use Illuminate\Http\Request;

class EdmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::user()->id === 3 || \Auth::user()->id === 1){
            return view('edms.index');
        }else{
            alert()->warning('دسترسی شما به این بخش محدود شده است');
            return redirect()->back();
        }
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
     * @param  \App\Edms  $edms
     * @return \Illuminate\Http\Response
     */
    public function show(Edms $edms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Edms  $edms
     * @return \Illuminate\Http\Response
     */
    public function edit(Edms $edms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Edms  $edms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Edms $edms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Edms  $edms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Edms $edms)
    {
        //
    }


    public function engineering()
    {
        return view('edms.engineering');
    }


    public function procurement()
    {
        return view('edms.procurement');
    }


    public function construction()
    {
        return view('edms.construction');
    }


    public function precommissioning()
    {
        return view('edms.precommissioning');
    }


    public function startup()
    {
        return view('edms.startup');
    }


    public function operation()
    {
        return view('edms.operation');
    }


    public function time()
    {
        return view('edms.time');
    }


    public function cost()
    {
        return view('edms.cost');
    }


    public function resource()
    {
        return view('edms.resource');
    }


    public function qaqc()
    {
        return view('edms.qaqc');
    }


    public function scope()
    {
        return view('edms.scope');
    }


    public function hse()
    {
        return view('edms.hse');
    }


    public function stakeholder()
    {
        return view('edms.stakeholder');
    }


    public function risk()
    {
        return view('edms.risk');
    }


    public function publicc()
    {
        return view('edms.public');
    }


    public function km()
    {
        return view('edms.km');
    }


}
