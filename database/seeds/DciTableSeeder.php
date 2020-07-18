<?php

use Illuminate\Database\Seeder;

class DciTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (($handle = fopen ( public_path () . '/imports/dcis.csv', 'r' )) !== FALSE) {

            while ( ($data = fgetcsv ( $handle, 10000, ',' )) !== FALSE ) {

                $startTime = new DateTime($data[9]);
                $ExtTransIssuedDate = $startTime->format('Y-m-d H:i:s');


                $startTime = new DateTime($data[10]);
                $EmployerExternalCommentsDate = $data[10] == "" ? null : $startTime->format('Y-m-d H:i:s');

                $startTime = new DateTime($data[11]);
                $EmployerExternalApprovalDate = $data[11] == "" ? null : $startTime->format('Y-m-d H:i:s');

                $startTime = new DateTime($data[15]);
                $ViewedDate = $data[15] == "" ? null : $startTime->format('Y-m-d H:i:s');

                $startTime = new DateTime($data[22]);
                $lastHardCopyReceivedDate = $data[22] == "" ? null : $startTime->format('Y-m-d H:i:s');

                $startTime = new DateTime($data[23]);
                $LastCommentDate = $data[23] == "" ? null : $startTime->format('Y-m-d H:i:s');

                $startTime = new DateTime($data[25]);
                $SentToSiteDate = $data[25] == "" ? null : $startTime->format('Y-m-d H:i:s');


                $startTime = new DateTime($data[18]);
                $START = $data[18] == "" ? null : $startTime->format('Y-m-d H:i:s');

                $startTime = new DateTime($data[19]);
                $IFRIFI = $data[19] == "" ? null : $startTime->format('Y-m-d H:i:s');

                $startTime = new DateTime($data[20]);
                $IFPIFEIFCORIFE = $data[20] == "" ? null : $startTime->format('Y-m-d H:i:s');

                $startTime = new DateTime($data[21]);
                $IFCIFE = $data[21] == "" ? null : $startTime->format('Y-m-d H:i:s');


                DB::table('dcis')->insert(
                    [
                        [
                            'DocNo' => trim($data[0]),
                            'Rev' => trim($data[1]),
                            'Title' => trim($data[2]),
                            'OwnerDocNo' => trim($data[3]),
                            'SubPhase' => trim($data[4]),
                            'POI' => trim($data[5]),
                            'OwnersAction' => trim($data[6]),
                            'Dept' => trim($data[7]),
                            'ExtTransNo' => trim($data[8]),
                            'ExtTransIssuedDate' => $ExtTransIssuedDate,
                            'EmployerExternalCommentsDate' => $EmployerExternalCommentsDate,
                            'EmployerExternalApprovalDate' => $EmployerExternalApprovalDate,
                            'RepliedByEmployer' => trim($data[12]),
                            'EmployerDelay' => trim($data[13]),
                            'ViewedBy' => trim($data[14]),
                            'ViewedDate' => $ViewedDate,
                            'WT' => trim($data[16]),
                            'DOCCOD' => trim($data[17]),

                            'START' => $START,
                            'IFRIFI' => $IFRIFI,
                            'IFPIFEIFCORIFE' => $IFPIFEIFCORIFE,
                            'IFCIFE' => $IFCIFE,

                            'lastHardCopyReceivedDate' => $lastHardCopyReceivedDate,
                            'LastCommentDate' => $LastCommentDate,
                            'LastCommentSheetNumber' => trim($data[24]),
                            'SentToSiteDate' => $SentToSiteDate,
                            'Status' => trim($data[26]),
                            'ACTUAL' => trim($data[27]),
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
