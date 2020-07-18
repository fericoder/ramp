<?php

use Illuminate\Database\Seeder;

class WbsTabeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (($handle = fopen ( public_path () . '/imports/wbs.csv', 'r' )) !== FALSE) {

            while ( ($data = fgetcsv ( $handle, 30000, ',' )) !== FALSE ) {

                DB::table('wbs')->insert(
                    [
                        [
                            'ActivityID' => trim($data[0]),
                            'status' => trim($data[1]),
                            'code' => trim($data[2]),
                            'name' => trim($data[3]),
                            'wf' => trim($data[4]),
                            'budgeted' => trim($data[5]),
                            'planStart' => trim($data[6]),
                            'planFinish' => trim($data[7]),
                            'planDeviation' => trim($data[8]),
                            'actStart' => trim($data[9]),
                            'actFinish' => trim($data[10]),
                            'actDeviation' => trim($data[11]),
                            'resources' => trim($data[12]),
                            'progress' => trim($data[13]),
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
