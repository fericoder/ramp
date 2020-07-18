<?php

namespace App\Http\Controllers\Project;

use App\Notifications\TaskAdded;
use Illuminate\Http\Request;
use App\Dci;
use App\User;
use App\Tdl;

class DciController extends \App\Http\Controllers\Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dcis = Dci::all();
        return view('project.engineering.dci.index', compact('dcis'));

    }



    public function edit(Request $request)
    {
        if (!$request->no){
            $dcis = Dci::all();
            return view('project.engineering.dci.edit', compact('dcis'));
        }else{
            $document = Dci::where('id', $request->no)->first();
            $dcis = Dci::all();
            return view('project.engineering.dci.edit', compact('document', 'dcis'));
        }

    }

    public function update(Request $request)
    {
        $request = $request->validate([
            'documentId' => ['nullable'],
            'Rev' => ['nullable'],
            'POI' => ['nullable'],
            'ExtTransNo' => ['nullable'],
            'ExtTransIssuedDate' => ['nullable'],
            'EmployerExternalCommentsDate' => ['nullable'],
            'LastCommentDate' => ['nullable'],
            'LastCommentSheetNumber' => ['nullable'],
            'SentToSiteDate' => ['nullable'],
            'Status' => ['nullable'],
            'ACTUAL' => ['nullable'],
            'documentFile' => ['nullable', 'mimes:pdf'],
            'transmittalFile' => ['nullable', 'mimes:pdf'],
            'commentFile' => ['nullable', 'mimes:pdf'],
            'DocNo' => ['nullable'],
        ]);

        $ExtTransIssuedDate = substr($request['ExtTransIssuedDate'], 0, 10);
        $ExtTransIssuedDate = date('Y-m-d H:i:s', (int)$ExtTransIssuedDate);

        $EmployerExternalCommentsDate = substr($request['EmployerExternalCommentsDate'], 0, 10);
        $EmployerExternalCommentsDate = date('Y-m-d H:i:s', (int)$EmployerExternalCommentsDate);

        $LastCommentDate = substr($request['LastCommentDate'], 0, 10);
        $LastCommentDate = date('Y-m-d H:i:s', (int)$LastCommentDate);


        $SentToSiteDate = substr($request['SentToSiteDate'], 0, 10);
        $SentToSiteDate = date('Y-m-d H:i:s', (int)$SentToSiteDate);


        if (isset($request['documentFile'])){
            // Doc File
            $filePath = "/edms/1-engineering/Documents/04-Detailed Eng/All Document/";
            $fileName = $request['DocNo'] . "-" . $request['Rev'] . '.pdf';
            $file = $request['documentFile'];
//            $file->move(public_path() . $filePath, $fileName);
            $file->move(public_path() . '_html' . $filePath, $fileName);
            //        $documentFileAddress = "$filePath" . "$fileName";
        }



        if (isset($request['transmittalFile'])){
            // TRANSMITTAL File
            $filePath = "/edms/1-engineering/Documents/06-TRANSMITTAL/";
            $fileName = $request['ExtTransNo'] . '.pdf';
            $file = $request['transmittalFile'];
//            $file->move(public_path() . $filePath, $fileName);
            $file->move(public_path() . '_html' . $filePath, $fileName);
            //        $documentFileAddress = "$filePath" . "$fileName";
        }



        if (isset($request['LastCommentSheetNumber'])){
            // CommentSheet File
            $filePath = "/edms/1-engineering/Documents/07-Comment Sheet/";
            $fileName = $request['LastCommentSheetNumber'] . '.pdf';
            $file = $request['commentFile'];
//            $file->move(public_path() . $filePath, $fileName);
            $file->move(public_path() . '_html' . $filePath, $fileName);
            //        $documentFileAddress = "$filePath" . "$fileName";
        }




        $doc = Dci::where('id', $request['documentId'])->first();
        $doc->update([
            'Rev' => $request['Rev'],
            'POI' => $request['POI'],
            'ExtTransNo' => $request['ExtTransNo'],
            'ExtTransIssuedDate' => $ExtTransIssuedDate,
            'EmployerExternalCommentsDate' => $EmployerExternalCommentsDate,
            'LastCommentDate' => $LastCommentDate,
            'LastCommentSheetNumber' => $request['LastCommentSheetNumber'],
            'SentToSiteDate' => $SentToSiteDate,
            'Status' => $request['Status'],
            'ACTUAL' => $request['ACTUAL'],
        ]);

        switch ($doc->Dept) {
            case "IN":
                $assignedTo = 36;
                break;
            case "EL":
                $assignedTo = 16;
                break;

            case "ST":
                $assignedTo = 39;
                break;

            case "PR":
                $assignedTo = 13;
                break;

            case "HSE":
                $assignedTo = 13;
                break;

            case "HV":
                $assignedTo = 40;
                break;

            case "MC":
                $assignedTo = 40;
                break;

            case "MD":
                $assignedTo = 40;
                break;

            case "PI":
                $assignedTo = 40;
                break;

            case "HV":
                $assignedTo = 40;
                break;


            default:
                $assignedTo = 15;
        }


        $tdl = new Tdl;
        $tdl->name = "بررسی مدرک $doc->DocNo";
        $tdl->description = 'این تسک بصورت سیستمی به شما محول شده است. شما میتوانید وضعیت و موانع آنرا بروز نمایید.';
        $tdl->assignedTo = $assignedTo;
        $tdl->assignerId = 15;
        $tdl->assignerName = 'اسماعیل رضایی';
        $tdl->priority = 'بالا';
        $tdl->deadline = \Carbon\Carbon::today()->addDays(7)->toDateString();
        $tdl->status = 'بررسی نشده';
        $tdl->save();

        User::where('id', $assignedTo)->first()->notify(new TaskAdded($tdl));
//        \Mail::to('rahmani@rieco.ir')->send(new DocumentUpdated(['docNo' => $doc->DocNo]));

        alert()->success('انجام شد.');
        return redirect()->back();
    }



    public function create()
    {
        return view('project.engineering.dci.create');

    }

    public function store(Request $request)
    {
        $request = $request->validate([
            'DocNo' => ['required'],
            'Title' => ['required'],
            'OwnerDocNo' => ['nullable'],
            'OwnersAction' => ['required'],
            'Dept' => ['required'],
            'WT' => ['nullable'],
            'DOCCOD' => ['required'],
            'START' => ['required'],
            'IFRIFI' => ['required'],
            'IFPIFEIFCORIFE' => ['required'],
            'IFCIFE' => ['required'],
        ]);

        $START = substr($request['START'], 0, 10);
        $START = date('Y-m-d H:i:s', (int)$START);

        $IFRIFI = substr($request['IFRIFI'], 0, 10);
        $IFRIFI = date('Y-m-d H:i:s', (int)$IFRIFI);

        $IFPIFEIFCORIFE = substr($request['IFPIFEIFCORIFE'], 0, 10);
        $IFPIFEIFCORIFE = date('Y-m-d H:i:s', (int)$IFPIFEIFCORIFE);

        $IFCIFE = substr($request['IFCIFE'], 0, 10);
        $IFCIFE = date('Y-m-d H:i:s', (int)$IFCIFE);


        Dci::create([
            'DocNo' => $request['DocNo'],
            'Title' => $request['Title'],
            'OwnerDocNo' => $request['OwnerDocNo'],
            'OwnersAction' => $request['OwnersAction'],
            'Dept' => $request['Dept'],
            'WT' => $request['WT'],
            'DOCCOD' => $request['DOCCOD'],
            'START' => $START,
            'IFRIFI' => $IFRIFI,
            'IFPIFEIFCORIFE' => $IFPIFEIFCORIFE,
            'IFCIFE' => $IFCIFE,
        ]);

//        \Mail::to('cyber.injector@yahoo.com')->send(new DocumentAdded(['docNo' => $request['DocNo']]));
        alert()->success('انجام شد.');
        return redirect()->back();
    }



}
