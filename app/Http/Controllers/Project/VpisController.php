<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Vpis;
use DateTime;
use App\Imports\VpisImport;

class VpisController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!$request->no){
            $vpis = Vpis::get()->unique('DocNo');
            return view('project.engineering.vpis.index', compact('vpis'));
        }else{
            $documents = Vpis::where('RequisitionNo', $request->no)->get();
            $vpis = Vpis::get()->unique('DocNo');
            return view('project.engineering.vpis.index', compact('documents', 'vpis'));
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.engineering.vpis.create');
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
            'vpis' => 'required|mimes:xlsx',
        ]);

        $path = $request->file('vpis')->storeAs('vpis', '-' . $request->user()->id . '-' . time() . '.xlsx');
        $file = storage_path('app/' . $path);

        $vpis = \Excel::toCollection(new VpisImport, $file);
        Vpis::truncate();

        foreach($vpis->first() as $key => $vpis){
            if ($key < 1) continue;

            $PlanReceivedDate = !is_numeric($vpis[5]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($vpis[5]);
            $VendorUploadDate = !is_numeric($vpis[6]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($vpis[6]);
            $VendorIssuedDate = !is_numeric($vpis[8]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($vpis[8]);
            $PIDECCommentDate = !is_numeric($vpis[10]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($vpis[10]);
            $PIDECNoCommentDateEDMS3 = !is_numeric($vpis[11]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($vpis[11]);
            $PIDECNoCommentDate = !is_numeric($vpis[12]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($vpis[12]);
            $PIDECMinorCommentDate = !is_numeric($vpis[13]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($vpis[13]);
            $PIDECMajorCommentDate = !is_numeric($vpis[14])  ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($vpis[14]);
            $PIDECInformationCommentDate = !is_numeric($vpis[15]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($vpis[15]);
            $PIDECRejectCommentDate = !is_numeric($vpis[16]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($vpis[16]);
            $PIDECREEmailDate = !is_numeric($vpis[17]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($vpis[17]);
            $PIDECRTSEmailDate = !is_numeric($vpis[18]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($vpis[18]);
            $ViewdDate = !is_numeric($vpis[22]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($vpis[22]);
            $EmployerExternalCommentDate = !is_numeric($vpis[23]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($vpis[23]);
            $EmployerExternalApprovalDate = !is_numeric($vpis[24]) ? null : \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($vpis[24]);


            $vpis = Vpis::create([
                'DocNo' => trim($vpis[0]),
                'Rev' => trim($vpis[1]),
                'Title' => trim($vpis[2]),
                'RequisitionNo' => trim($vpis[3]),
                'VendorName' => trim($vpis[4]),
                'PlanReceivedDate' => $PlanReceivedDate,
                'VendorUploadDate' => $VendorUploadDate,
                'VendorIssuedDate' => $VendorIssuedDate,
                'IssuedByVendor' => trim($vpis[8]),
                'VendorDelay' => trim($vpis[9]),
                'PIDECCommentDate' => $PIDECCommentDate,
                'PIDECNoCommentDateEDMS3' => $PIDECNoCommentDateEDMS3,
                'PIDECNoCommentDate' => $PIDECNoCommentDate,
                'PIDECMinorCommentDate' => $PIDECMinorCommentDate,
                'PIDECMajorCommentDate' => $PIDECMajorCommentDate,
                'PIDECInformationCommentDate' => $PIDECInformationCommentDate,
                'PIDECRejectCommentDate' => $PIDECRejectCommentDate,
                'PIDECREEmailDate' => $PIDECREEmailDate,
                'PIDECRTSEmailDate' => $PIDECRTSEmailDate,
                'RepliedByPIDEC' => trim($vpis[19]),
                'OriginatorDelay' => trim($vpis[20]),
                'viewedBy' => trim($vpis[21]),
                'ViewdDate' => $ViewdDate,
                'EmployerExternalCommentDate' => $EmployerExternalCommentDate,
                'EmployerExternalApprovalDate' => $EmployerExternalApprovalDate,
                'created_at' => now(),
                'updated_at' => null,
                ]);

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
