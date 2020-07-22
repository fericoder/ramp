<?php

namespace App\Http\Controllers\PM;

use App\Http\Requests\TdlRequest;
use App\Tdl;
use App\User;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use SoapClient;
use App\Notifications\TaskAdded;


class TdlController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $tdlsAssignedToThisUser = Tdl::where('assignedTo', '=', \Auth::user()->id)->get();
        $tdlsAssignedToOther = Tdl::where('assignerId', '=', \Auth::user()->id)->get();
        $tasks = Tdl::all();
        return view('pm.tdl.index', compact('tdlsAssignedToThisUser', 'tdlsAssignedToOther', 'users', 'tasks'));

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
    public function store(TdlRequest $request)
    {

        if ($request->file('attachment'))
        {
            $attachment = $this->uploadFile($request->file('attachment'));
        }else{
            $attachment = 'nothing';
        }

        $tempDate = substr($request->date, 0, 10);
        $deadline = date('Y-m-d H:i:s', (int)$tempDate);

        $tdl = Tdl::create([
            'name' => $request->name,
            'description' => $request->description,
            'assignedTo' => (int)$request->assignedTo,
            'assignerId' => \Auth::user()->id,
            'assignerName' => \Auth::user()->fName . ' ' . \Auth::user()->lName,
            'priority' => $request->priority,
            'attachment' => $attachment,
            'deadline' => $deadline,
            'status' => 'بررسی نشده'
        ]);

        User::where('id', (int)$request->assignedTo)->first()->notify(new TaskAdded($tdl));

        alert()->success('انجام شد.', 'تسک با موفقیت اضافه شد.');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tdl  $tdl
     * @return \Illuminate\Http\Response
     */
    public function show(Tdl $tdl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tdl  $tdl
     * @return \Illuminate\Http\Response
     */
    public function edit(Tdl $tdl)
    {

//        if ($tdl->assignerId != \Auth::user()->id OR $tdl->assignedTo != \Auth::user()->id ){
//            alert()->warning('عدم دسترسی');
//            return redirect()->back();
//        }

        $users = User::all();
        return view('pm.tdl.edit', compact('tdl', 'users'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tdl  $tdl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tdl $tdl)
    {

//        if ($tdl->assignerId == \Auth::user()->id OR $tdl->assignedTo == \Auth::user()->id ){
//            alert()->warning('عدم دسترسی');
//            return redirect()->back();
//        }

        if ($request->file('doerAttachment'))
        {
            $doerAttachment = $this->uploadFile($request->file('doerAttachment'));
        }else{
            $doerAttachment = 'nothing';
        }


        $tdl->update([
                'status' => $request->status,
                'holdPoint' => $request->holdPoint,
                'doerDescription' => $request->doerDescription,
                'assignedTo' => $request->assignedToSecond,
                'doerAttachment' => $doerAttachment,
            ]);

        alert()->success('بروز شد.', 'تسک با موفقیت بروز شد.');
        return redirect()->route('tdl.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tdl  $tdl
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $tdl = Tdl::findOrFail($id);

        if (! \Auth::user()->id === 3 OR !\Auth::user()->id === 1 OR !\Auth::user()->id === 2 ){
            alert()->warning('عدم دسترسی');
            return redirect()->back();
        }

        $tdl->delete();
        alert()->success('حذف شد.', 'تسک با موفقیت حذف شد.');
        return redirect()->back();

    }
}
