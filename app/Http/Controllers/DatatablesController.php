<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Vpis;
use App\Wbs;

class DatatablesController extends Controller
{
    public function vpis()
    {
        $vpis = Vpis::select(['DocNo','Rev','Title','RequisitionNo','VendorName','PlanReceivedDate','VendorUploadDate','VendorIssuedDate','IssuedByVendor','VendorDelay','PIDECCommentDate','PIDECNoCommentDateEDMS3','PIDECNoCommentDate','PIDECMinorCommentDate','PIDECMajorCommentDate','PIDECInformationCommentDate','PIDECRejectCommentDate','PIDECREEmailDate','PIDECRTSEmailDate','RepliedByPIDEC','OriginatorDelay','viewedBy','ViewdDate','EmployerExternalCommentDate','EmployerExternalApprovalDate']);
        return Datatables::of($vpis)->make();

    }

    public function wbs()
    {
        $wbs = Wbs::select(['ActivityID', 'status', 'code', 'name', 'wf', 'budgeted', 'planStart', 'planFinish', 'planDeviation', 'actStart', 'actFinish', 'actDeviation', 'resources', 'progress']);
        return Datatables::of($wbs)->make();

    }


}
