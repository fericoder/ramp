<?php

namespace App\Imports;

use App\Rci;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class RciImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {

        $startTime = new DateTime($row[4]);
        $row4 = $row[4] == "" ? null : $startTime->format('Y-m-d H:i:s');

        $startTime = new DateTime($row[5]);
        $row5 = $row[5] == "" ? null : $startTime->format('Y-m-d H:i:s');

        $startTime = new DateTime($row[6]);
        $row6 = $row[6] == "" ? null : $startTime->format('Y-m-d H:i:s');

        $startTime = new DateTime($row[7]);
        $row7 = $row[7] == "" ? null : $startTime->format('Y-m-d H:i:s');

        $startTime = new DateTime($row[8]);
        $row8 = $row[8] == "" ? null : $startTime->format('Y-m-d H:i:s');

        $startTime = new DateTime($row[9]);
        $row9 = $row[9] == "" ? null : $startTime->format('Y-m-d H:i:s');

        $startTime = new DateTime($row[10]);
        $row10 = $row[10] == "" ? null : $startTime->format('Y-m-d H:i:s');

        $startTime = new DateTime($row[11]);
        $row11 = $row[11] == "" ? null : $startTime->format('Y-m-d H:i:s');

        $startTime = new DateTime($row[12]);
        $row12 = $row[12] == "" ? null : $startTime->format('Y-m-d H:i:s');

        $startTime = new DateTime($row[13]);
        $row13 = $row[13] == "" ? null : $startTime->format('Y-m-d H:i:s');

        $startTime = new DateTime($row[14]);
        $row14 = $row[14] == "" ? null : $startTime->format('Y-m-d H:i:s');

        $startTime = new DateTime($row[15]);
        $row15 = $row[15] == "" ? null : $startTime->format('Y-m-d H:i:s');

        $startTime = new DateTime($row[16]);
        $row16 = $row[16] == "" ? null : $startTime->format('Y-m-d H:i:s');

        $startTime = new DateTime($row[17]);
        $row17 = $row[17] == "" ? null : $startTime->format('Y-m-d H:i:s');

        $startTime = new DateTime($row[18]);
        $row18 = $row[18] == "" ? null : $startTime->format('Y-m-d H:i:s');

        $startTime = new DateTime($row[19]);
        $row19 = $row[19] == "" ? null : $startTime->format('Y-m-d H:i:s');

        $startTime = new DateTime($row[20]);
        $row20 = $row[20] == "" ? null : $startTime->format('Y-m-d H:i:s');


        return new Rci([
            'Discipline' => trim($data[0]),
            'RequisitionNumber' => trim($data[1]),
            'Description' => trim($data[2]),
            'Type' => trim($data[3]),
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
            'Status' => trim($data[21]),
            'created_at' => now(),
            'updated_at' => null,
            ]);
    }
}
