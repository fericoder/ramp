<?php

namespace App\Http\Controllers\Project;

use App\Construction;
use App\Event;
use App\Wbs;
use Illuminate\Http\Request;

class ConstructionController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $wbs = Wbs::orderBy('id', 'DESC')->take(50)->get();
        $events = Event::where('section', 'ساختمان و نصب')->get();
        return view('project.construction.dashboard', compact('events', 'wbs'));
    }

}
