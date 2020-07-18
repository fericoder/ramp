<?php

use Illuminate\Database\Seeder;

class VpisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        if (($handle = fopen ( public_path () . '/imports/vpis.csv', 'r' )) !== FALSE) {

            while ( ($data = fgetcsv ( $handle, 30000, ',' )) !== FALSE ) {

                $startTime = new DateTime($data[5]);
                $PlanReceivedDate = $data[5] == "" ? null : $startTime->format('Y-m-d H:i:s');

                $startTime = new DateTime($data[6]);
                $VendorUploadDate = $data[6] == "" ? null : $startTime->format('Y-m-d H:i:s');


                $startTime = new DateTime($data[8]);
                $VendorIssuedDate = $data[8] == "" ? null : $startTime->format('Y-m-d H:i:s');


                $startTime = new DateTime($data[11]);
                $PIDECCommentDate = $data[11] == "" ? null : $startTime->format('Y-m-d H:i:s');

                $startTime = new DateTime($data[12]);
                $PIDECNoCommentDateEDMS3 = $data[12] == "" ? null : $startTime->format('Y-m-d H:i:s');


                $startTime = new DateTime($data[13]);
                $PIDECNoCommentDate = $data[13] == "" ? null : $startTime->format('Y-m-d H:i:s');


                $startTime = new DateTime($data[14]);
                $PIDECMinorCommentDate = $data[14] == "" ? null : $startTime->format('Y-m-d H:i:s');


                $startTime = new DateTime($data[15]);
                $PIDECMajorCommentDate = $data[15] == "" ? null : $startTime->format('Y-m-d H:i:s');


                $startTime = new DateTime($data[16]);
                $PIDECInformationCommentDate = $data[16] == "" ? null : $startTime->format('Y-m-d H:i:s');


                $startTime = new DateTime($data[17]);
                $PIDECRejectCommentDate = $data[17] == "" ? null : $startTime->format('Y-m-d H:i:s');


                $startTime = new DateTime($data[18]);
                $PIDECREEmailDate = $data[18] == "" ? null : $startTime->format('Y-m-d H:i:s');


                $startTime = new DateTime($data[19]);
                $PIDECRTSEmailDate = $data[19] == "" ? null : $startTime->format('Y-m-d H:i:s');


                $startTime = new DateTime($data[23]);
                $ViewdDate = $data[23] == "" ? null : $startTime->format('Y-m-d H:i:s');


                $startTime = new DateTime($data[24]);
                $EmployerExternalCommentDate = $data[24] == "" ? null : $startTime->format('Y-m-d H:i:s');


                $startTime = new DateTime($data[25]);
                $EmployerExternalApprovalDate = $data[25] == "" ? null : $startTime->format('Y-m-d H:i:s');









                DB::table('vpis')->insert(
                    [
                        [
                            'DocNo' => trim($data[0]),
                            'Rev' => trim($data[1]),
                            'Title' => trim($data[2]),
                            'RequisitionNo' => trim($data[3]),
                            'VendorName' => trim($data[4]),
                            'PlanReceivedDate' => $PlanReceivedDate,
                            'VendorUploadDate' => $VendorUploadDate,
                            'Status' => trim($data[7]),
                            'VendorIssuedDate' => $VendorIssuedDate,
                            'IssuedByVendor' => trim($data[9]),
                            'VendorDelay' => trim($data[10]),
                            'PIDECCommentDate' => $PIDECCommentDate,
                            'PIDECNoCommentDateEDMS3' => $PIDECNoCommentDateEDMS3,
                            'PIDECNoCommentDate' => $PIDECNoCommentDate,
                            'PIDECMinorCommentDate' => $PIDECMinorCommentDate,
                            'PIDECMajorCommentDate' => $PIDECMajorCommentDate,
                            'PIDECInformationCommentDate' => $PIDECInformationCommentDate,
                            'PIDECRejectCommentDate' => $PIDECRejectCommentDate,
                            'PIDECREEmailDate' => $PIDECREEmailDate,
                            'PIDECRTSEmailDate' => $PIDECRTSEmailDate,
                            'RepliedByPIDEC' => trim($data[20]),
                            'OriginatorDelay' => trim($data[21]),
                            'viewedBy' => trim($data[22]),
                            'ViewdDate' => $ViewdDate,
                            'EmployerExternalCommentDate' => $EmployerExternalCommentDate,
                            'EmployerExternalApprovalDate' => $EmployerExternalApprovalDate,
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
