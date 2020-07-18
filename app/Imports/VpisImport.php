<?php

namespace App\Imports;

use App\Vpis;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class VpisImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {

        $startTime = new DateTime($row[5]);
        $PlanReceivedDate = $row[5] == "" ? null : $startTime->format('Y-m-d H:i:s');

        $startTime = new DateTime($row[6]);
        $VendorUploadDate = $row[6] == "" ? null : $startTime->format('Y-m-d H:i:s');


        $startTime = new DateTime($row[8]);
        $VendorIssuedDate = $row[8] == "" ? null : $startTime->format('Y-m-d H:i:s');


        $startTime = new DateTime($row[11]);
        $PIDECCommentDate = $row[11] == "" ? null : $startTime->format('Y-m-d H:i:s');

        $startTime = new DateTime($row[12]);
        $PIDECNoCommentDateEDMS3 = $row[12] == "" ? null : $startTime->format('Y-m-d H:i:s');


        $startTime = new DateTime($row[13]);
        $PIDECNoCommentDate = $row[13] == "" ? null : $startTime->format('Y-m-d H:i:s');


        $startTime = new DateTime($row[14]);
        $PIDECMinorCommentDate = $row[14] == "" ? null : $startTime->format('Y-m-d H:i:s');


        $startTime = new DateTime($row[15]);
        $PIDECMajorCommentDate = $row[15] == "" ? null : $startTime->format('Y-m-d H:i:s');


        $startTime = new DateTime($row[16]);
        $PIDECInformationCommentDate = $row[16] == "" ? null : $startTime->format('Y-m-d H:i:s');


        $startTime = new DateTime($row[17]);
        $PIDECRejectCommentDate = $row[17] == "" ? null : $startTime->format('Y-m-d H:i:s');


        $startTime = new DateTime($row[18]);
        $PIDECREEmailDate = $row[18] == "" ? null : $startTime->format('Y-m-d H:i:s');


        $startTime = new DateTime($row[19]);
        $PIDECRTSEmailDate = $row[19] == "" ? null : $startTime->format('Y-m-d H:i:s');


        $startTime = new DateTime($row[23]);
        $ViewdDate = $row[23] == "" ? null : $startTime->format('Y-m-d H:i:s');


        $startTime = new DateTime($row[24]);
        $EmployerExternalCommentDate = $row[24] == "" ? null : $startTime->format('Y-m-d H:i:s');


        $startTime = new DateTime($row[25]);
        $EmployerExternalApprovalDate = $row[25] == "" ? null : $startTime->format('Y-m-d H:i:s');


        return new Vpis([
            'DocNo' => trim($row[0]),
            'Rev' => trim($row[1]),
            'Title' => trim($row[2]),
            'RequisitionNo' => trim($row[3]),
            'VendorName' => trim($row[4]),
            'PlanReceivedDate' => $PlanReceivedDate,
            'VendorUploadDate' => $VendorUploadDate,
            'Status' => trim($row[7]),
            'VendorIssuedDate' => $VendorIssuedDate,
            'IssuedByVendor' => trim($row[9]),
            'VendorDelay' => trim($row[10]),
            'PIDECCommentDate' => $PIDECCommentDate,
            'PIDECNoCommentDateEDMS3' => $PIDECNoCommentDateEDMS3,
            'PIDECNoCommentDate' => $PIDECNoCommentDate,
            'PIDECMinorCommentDate' => $PIDECMinorCommentDate,
            'PIDECMajorCommentDate' => $PIDECMajorCommentDate,
            'PIDECInformationCommentDate' => $PIDECInformationCommentDate,
            'PIDECRejectCommentDate' => $PIDECRejectCommentDate,
            'PIDECREEmailDate' => $PIDECREEmailDate,
            'PIDECRTSEmailDate' => $PIDECRTSEmailDate,
            'RepliedByPIDEC' => trim($row[20]),
            'OriginatorDelay' => trim($row[21]),
            'viewedBy' => trim($row[22]),
            'ViewdDate' => $ViewdDate,
            'EmployerExternalCommentDate' => $EmployerExternalCommentDate,
            'EmployerExternalApprovalDate' => $EmployerExternalApprovalDate,
            'created_at' => now(),
            'updated_at' => null,
            ]);
    }
}
