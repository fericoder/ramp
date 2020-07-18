<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (($handle = fopen ( public_path () . '/imports/users.csv', 'r' )) !== FALSE) {

            while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {

                DB::table('users')->insert(
                    [
                        [
                            'fName' => trim($data[0]),
                            'lName' => trim($data[1]),
                            'email' => trim($data[2]),
                            'level' => trim($data[3]),
                            'position' => trim($data[4]),
                            'location' => trim($data[5]),
                            'mobile' => trim($data[6]),
                            'tel' => trim($data[7]),
                            'dakheli' => trim($data[8]),
                            'avatar' => '/assets/media/users/no-avatar.jpg',
                            'password' => bcrypt('123456'),
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
