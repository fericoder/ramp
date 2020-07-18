<?php

use Illuminate\Database\Seeder;

class AvlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {


        if (($handle = fopen ( public_path () . '/imports/avls.csv', 'r' )) !== FALSE) {

            while ( ($data = fgetcsv ( $handle, 10000, ',' )) !== FALSE ) {

                DB::table('avls')->insert(
                    [
                        [
                            'owner' => trim($data[0]),
                            'preparedBy' => trim($data[1]),
                            'rev' => trim($data[2]),
                            'discipline' => trim($data[3]),
                            'discipline1' => trim($data[4]),
                            'discipline2' => trim($data[5]),
                            'discipline3' => trim($data[6]),
                            'discipline4' => trim($data[7]),
                            'companyName' => trim($data[8]),
                            'origin' => trim($data[9]),
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
