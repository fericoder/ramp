<?php

namespace App\Http\Controllers\PM;

use App\Tender;
use Illuminate\Http\Request;

class TenderController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenders = Tender::all();
        return view('pm.tenders.index', compact('tenders'));
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
     * @param  \App\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function show(Tender $tender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function edit(Tender $tender)
    {
        return view('pm.tenders.edit', compact('tender'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tender $tender)
    {
        $tender->update([
            'tarikhShorooBoroonsepari' => $request->tarikhShorooBoroonsepari,
            'arzi' => $request->arzi,
            'riali' => $request->riali,
            'moddat' => $request->moddat,
            'mablaghTazmin' => $request->mablaghTazmin,
            'sherkatHa' => $request->sherkatHa,
            'tarikhDavat' => $request->tarikhDavat,
            'tedadPishnahadat' => $request->tedadPishnahadat,
            'tarikhBazgoshaei' => $request->tarikhBazgoshaei,
            'sherkatBarande' => $request->sherkatBarande,
            'sherkatBarande' => $request->sherkatBarande,
            'mablaghBarandeRiali' => $request->mablaghBarandeRiali,
            'tarikhGharardad' => $request->tarikhGharardad,
            'shomareGHarardad' => $request->shomareGHarardad,
            'tozihat' => $request->tozihat,
            'user_id' => \Auth::user()->id,
        ]);

        alert()->success('بروز شد.', 'مناقصه با موفقیت بروز شد.');
        return redirect()->route('tenders.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tender  $tender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tender $tender)
    {
        //
    }
}
