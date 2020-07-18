<?php

namespace App\Http\Controllers\Project;

use App\Dci;
use App\Event;
use App\Mail\DocumentAdded;
use App\User;
use App\Mail\DocumentUpdated;
use App\Risk;
use App\Rci;
use App\Tdl;
use App\Vpis;
use Illuminate\Http\Request;
use App\Notifications\TaskAdded;

class EngineeringController extends \App\Http\Controllers\Controller
{

    public function index()
    {
        $rcis = Rci::all();
        $vpis = Vpis::all();
        $dcis = Dci::all();
        $events = Event::where('section', 'مهندسی')->get();
        $reqs = $vpis->groupBy('RequisitionNo');

        return view('project.engineering.index', compact('rcis', 'vpis', 'dcis', 'events', 'reqs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.engineering.create');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



}
