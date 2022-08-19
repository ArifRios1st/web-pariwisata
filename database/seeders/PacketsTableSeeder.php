<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacketsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::table('packets')->insert(array (
            0 =>
            array (
                'id' => 1,
                'destination_id' => 1,
                'name' => 'Single',
                'slug' => 'single',
                'days' => 3,
                'people' => 1,
                'price' => 1000000,
                'created_at' => '2022-08-18 21:05:24',
                'updated_at' => '2022-08-20 06:46:33',
            ),
            1 =>
            array (
                'id' => 2,
                'destination_id' => 1,
                'name' => 'Couple',
                'slug' => 'couple',
                'days' => 3,
                'people' => 2,
                'price' => 1500000,
                'created_at' => '2022-08-18 21:05:24',
                'updated_at' => '2022-08-20 06:37:26',
            ),
            2 =>
            array (
                'id' => 11,
                'destination_id' => 3,
                'name' => 'Single',
                'slug' => 'dolor',
                'days' => 3,
                'people' => 1,
                'price' => 1000000,
                'created_at' => '2022-08-18 21:05:24',
                'updated_at' => '2022-08-20 06:56:14',
            ),
            3 =>
            array (
                'id' => 251,
                'destination_id' => 1,
                'name' => 'Paket Hemat',
                'slug' => 'paket-hemat',
                'days' => 3,
                'people' => 10,
                'price' => 5000000,
                'created_at' => '2022-08-19 00:10:32',
                'updated_at' => '2022-08-20 06:38:31',
            ),
        ));


    }
}
