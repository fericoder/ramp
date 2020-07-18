<?php

namespace App\Http\Controllers;

use App\Dci;
use App\Event;
use Illuminate\Http\Request;

class DataentryController extends Controller
{
    public function index()
    {
        return view('dataentry.index');
    }



    public function events(Request $request)
    {
            $events = Event::all();
            return view('dataentry.events', compact('events'));
    }

    public function eventStore(Request $request)
    {
        $request = $request->validate([
            'type' => ['required'],
            'section' => ['required'],
            'description' => ['required'],
        ]);

            Event::create([
                'type' => $request['type'],
                'section' => $request['section'],
                'description' => $request['description'],
                'user_id' => \Auth::user()->id,
            ]);

        alert()->success('انجام شد.');
        $events = Event::all();
        return view('dataentry.events', compact('events'));
    }

    public function eventDelete(Request $request)
    {
            $event = Event::find($request->id);
            $event->delete();
            alert()->success( 'حذف شد');
            return redirect()->back();
    }



}
