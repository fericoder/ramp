<?php

namespace App\Http\Controllers\Project;

use App\Procurement;
use App\Rci;
use App\Vpis;
use App\Event;
use Illuminate\Http\Request;

class ProcurementController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $rcis = Rci::all();
        $vpis = Vpis::all();
        $events = Event::where('section', 'کالا')->get();
        $reqs = $vpis->groupBy('RequisitionNo');

        return view('project.procurement.index', compact('rcis', 'vpis', 'events', 'reqs'));
    }

    public function sefareshgozari()
    {
        return view('project.procurement.sefareshgozari');
    }

    public function tasribakhshi()
    {
        return view('project.procurement.tasribakhshi');
    }


}
