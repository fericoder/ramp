<?php

use Illuminate\Database\Seeder;

class TendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (($handle = fopen ( public_path () . '/imports/tenders.csv', 'r' )) !== FALSE) {

            while ( ($data = fgetcsv ( $handle, 10000, ',' )) !== FALSE ) {

                DB::table('tenders')->insert(
                    [
                        [
                            'radif' => trim($data[0]),
                            'mozoo' => trim($data[1]),
                            'tarikhShorooBoroonsepari' => trim($data[2]),
                            'arzi' => trim($data[3]),
                            'riali' => trim($data[4]),
                            'moddat' => trim($data[5]),
                            'mablaghTazmin' => trim($data[6]),
                            'sherkatHa' => trim($data[7]),
                            'tarikhDavat' => trim($data[8]),
                            'tedadPishnahadat' => trim($data[9]),
                            'tarikhBazgoshaei' => trim($data[10]),
                            'sherkatBarande' => trim($data[11]),
                            'mablaghBarande' => trim($data[12]),
                            'mablaghBarandeRiali' => trim($data[13]),
                            'tarikhGharardad' => trim($data[14]),
                            'shomareGHarardad' => trim($data[15]),
                            'tozihat' => trim($data[16]),
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
