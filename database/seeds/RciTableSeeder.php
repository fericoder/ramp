<?php

use Illuminate\Database\Seeder;

class RciTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        if (($handle = fopen ( public_path () . '/imports/rcis.csv', 'r' )) !== FALSE) {

            while ( ($data = fgetcsv ( $handle, 10000, ',' )) !== FALSE ) {

                DB::table('rcis')->insert(
                    [
                        [
                            'Discipline' => trim($data[0]),
                            'RequisitionNumber' => trim($data[1]),
                            'Description' => trim($data[2]),
                            'Type' => trim($data[3]),
                            'IssueForInquiry' => trim($data[4]),
                            'VendorQuotations' => trim($data[5]),
                            'TBA' => trim($data[6]),
                            'VendorSelection' => trim($data[7]),
                            'PurchaseOrder' => trim($data[8]),
                            'EffectiveDate' => trim($data[9]),
                            'KickOffMeeting' => trim($data[10]),
                            'Engineering' => trim($data[11]),
                            'SupplyRawMaterial' => trim($data[12]),
                            'Manufacturing' => trim($data[13]),
                            'FinalInspectionInspectionCertificate' => trim($data[14]),
                            'FOBExworkDelivery' => trim($data[15]),
                            'BookingOfVessel' => trim($data[16]),
                            'AdvanceShippingNotice' => trim($data[17]),
                            'SeaTransportation' => trim($data[18]),
                            'CustomClearance' => trim($data[19]),
                            'SiteDelivery' => trim($data[20]),
                            'Status' => trim($data[21]),
                            'created_at' => now(),
                            'updated_at' => null,
                        ],
                    ]
                );

            }

            fclose ( $handle );
        }

    }
}
