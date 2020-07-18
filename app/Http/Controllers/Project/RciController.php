<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Rci;
use App\Imports\RciImport;

class RciController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.procurement.rci.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'rci' => 'required|mimes:xlsx',
        ]);

        $path = $request->file('rci')->storeAs('rci', '-' . $request->user()->id . '-' . time() . '.xlsx');
        $file = storage_path('app/' . $path);

        $rci = \Excel::toCollection(new RciImport, $file);
        Rci::truncate();

        foreach($rci->first() as $key => $rci){
            if ($key < 1) continue;

            $row4 = !is_numeric($rci[4]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rci[4]);
            $row5 = !is_numeric($rci[5]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rci[5]);
            $row6 = !is_numeric($rci[6]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rci[6]);
            $row7 = !is_numeric($rci[7]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rci[7]);
            $row8 = !is_numeric($rci[8]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rci[8]);
            $row9 = !is_numeric($rci[9]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rci[9]);
            $row10 = !is_numeric($rci[10]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rci[10]);
            $row11 = !is_numeric($rci[11]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rci[11]);
            $row12 = !is_numeric($rci[12]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rci[12]);
            $row13 = !is_numeric($rci[13]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rci[13]);
            $row14 = !is_numeric($rci[14]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rci[14]);
            $row15 = !is_numeric($rci[15]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rci[15]);
            $row16 = !is_numeric($rci[16]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rci[16]);
            $row17 = !is_numeric($rci[17]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rci[17]);
            $row18 = !is_numeric($rci[18]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rci[18]);
            $row19 = !is_numeric($rci[19]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rci[19]);
            $row20 = !is_numeric($rci[20]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($rci[20]);


            $rci = Rci::create([
                'Discipline' => trim($rci[0]),
                'RequisitionNumber' => trim($rci[1]),
                'Description' => trim($rci[2]),
                'Type' => trim($rci[3]),
                'IssueForInquiry' => $row4,
                'VendorQuotations' => $row5,
                'TBA' => $row6,
                'VendorSelection' => $row7,
                'PurchaseOrder' => $row8,
                'EffectiveDate' => $row9,
                'KickOffMeeting' => $row10,
                'Engineering' => $row11,
                'SupplyRawMaterial' => $row12,
                'Manufacturing' => $row13,
                'FinalInspectionInspectionCertificate' => $row14,
                'FOBExworkDelivery' => $row15,
                'BookingOfVessel' => $row16,
                'AdvanceShippingNotice' => $row17,
                'SeaTransportation' => $row18,
                'CustomClearance' => $row19,
                'SiteDelivery' => $row20,
                'Status' => trim($rci[21]),
                'created_at' => now(),
                'updated_at' => null,
            ]);;

        }




        alert()->success('انجام شد.');
        return redirect()->back();


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
