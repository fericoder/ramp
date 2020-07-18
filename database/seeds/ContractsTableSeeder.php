<?php

use Illuminate\Database\Seeder;

class ContractsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (($handle = fopen ( public_path () . '/imports/contracts.csv', 'r' )) !== FALSE) {

            while ( ($data = fgetcsv ( $handle, 10000, ',' )) !== FALSE ) {


//                $startTime = new DateTime($data[42]);
//                $miladi = $data[42] == "" ? null : $startTime->format('Y-m-d H:i:s');

                DB::table('contracts')->insert(
                    [
                        [
                            'shomare' => trim($data[0]),
                            'vaziat' => trim($data[1]),
                            'taraf' => trim($data[2]),
                            'onvan' => trim($data[3]),
                            'riali' => trim($data[4]),
                            'arzi' => trim($data[5]),
                            'mablaghNahaeiRiali' => trim($data[6]),
                            'mablaghNahaeiRialiArzi' => trim($data[7]),
                            'tarikhAghd' => trim($data[8]),
                            'tarikhEblagh' => trim($data[9]),
                            'shomareEblagh' => trim($data[10]),
                            'tarikhShoroo' => trim($data[11]),
                            'moddatAvvalie' => trim($data[12]),
                            'dateType' => trim($data[13]),
                            'tarikhEtmam' => trim($data[14]),
                            'moddatBaghimande' => trim($data[15]),
                            'shomareSooratvaziat' => trim($data[16]),
                            'mablaghSootarvaziatRiali' => trim($data[17]),
                            'mablaghSootarvaziatArzi' => trim($data[18]),
                            'darsadPishraftMali' => trim($data[19]),
                            'tazminAnjam' => trim($data[20]),
                            'tazminPishpardakht' => trim($data[21]),
                            'tazminHosn' => trim($data[22]),
                            'mojavvezFaliatTarikh' => trim($data[23]),
                            'mojavvezShomare' => trim($data[24]),
                            'tahvilMovaghatTarikh' => trim($data[25]),
                            'mohlatRafNaghs' => trim($data[26]),
                            'tarikhRafNaghs' => trim($data[27]),
                            'moddatDoreTazmin' => trim($data[28]),
                            'tahvilGhatiTarikh' => trim($data[29]),
                            'mafasa' => trim($data[30]),
                            'address' => trim($data[31]),
                            'modiramel' => trim($data[32]),
                            'namayande' => trim($data[33]),
                            'mobile' => trim($data[34]),
                            'tel' => trim($data[35]),
                            'fax' => trim($data[36]),
                            'email' => trim($data[37]),
                            'balanceMaterial' => trim($data[38]),
                            'sooorathesabNahaei' => trim($data[39]),
                            'omoorPending' => trim($data[40]),
                            'type' => trim($data[41]),
                            'miladi' => trim($data[42]),
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
