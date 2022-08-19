<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('orders')->delete();

        DB::table('orders')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_id' => 2,
                'packet_id' => 1,
                'start' => '2022-08-26',
                'status' => 3,
                'message' => NULL,
                'photo_path' => 'photos/AiRLkQKXuR0IEbntScjjquH4oNvmYTw4pAL1rP5I.jpg',
                'created_at' => '2022-08-18 23:35:04',
                'updated_at' => '2022-08-18 23:37:11',
            ),
            1 =>
            array (
                'id' => 2,
                'user_id' => 3,
                'packet_id' => 1,
                'start' => '2022-08-18',
                'status' => 3,
                'message' => NULL,
                'photo_path' => 'photos/CnuZUv77pidB85wCWhPBx5chQy7E69idaoPh8odI.jpg',
                'created_at' => '2022-08-19 00:12:19',
                'updated_at' => '2022-08-19 00:13:46',
            ),
            2 =>
            array (
                'id' => 3,
                'user_id' => 2,
                'packet_id' => 2,
                'start' => '2022-08-17',
                'status' => 1,
                'message' => NULL,
                'photo_path' => 'photos/89wzikJJmSS3fBei3qMpSV6q6RB4LJcmJlbsLwSB.jpg',
                'created_at' => '2022-08-19 02:19:25',
                'updated_at' => '2022-08-19 02:42:58',
            ),
            3 =>
            array (
                'id' => 4,
                'user_id' => 2,
                'packet_id' => 1,
                'start' => '2022-08-19',
                'status' => 0,
                'message' => NULL,
                'photo_path' => NULL,
                'created_at' => '2022-08-19 02:31:07',
                'updated_at' => '2022-08-19 02:31:07',
            ),
            4 =>
            array (
                'id' => 5,
                'user_id' => 2,
                'packet_id' => 2,
                'start' => '2022-08-25',
                'status' => 0,
                'message' => NULL,
                'photo_path' => NULL,
                'created_at' => '2022-08-19 02:42:03',
                'updated_at' => '2022-08-19 02:42:03',
            ),
            5 =>
            array (
                'id' => 6,
                'user_id' => 4,
                'packet_id' => 1,
                'start' => '2022-08-20',
                'status' => 1,
                'message' => 'Tolong ya',
                'photo_path' => 'photos/XmxCv5mfeMBfGW5dtOH3HxvsYh9akR5VL2KBkTfu.jpg',
                'created_at' => '2022-08-20 04:38:26',
                'updated_at' => '2022-08-20 04:38:54',
            ),
            6 =>
            array (
                'id' => 7,
                'user_id' => 7,
                'packet_id' => 1,
                'start' => '2022-08-20',
                'status' => 1,
                'message' => 'Oke ya saya tidak error',
                'photo_path' => 'photos/4QR9Kn2vbNChSY6GhpzU7kervRytV9RI9InsOszg.jpg',
                'created_at' => '2022-08-20 05:01:14',
                'updated_at' => '2022-08-20 05:02:04',
            ),
            7 =>
            array (
                'id' => 8,
                'user_id' => 7,
                'packet_id' => 1,
                'start' => '2022-08-20',
                'status' => 4,
                'message' => 'Oke ya saya tidak error',
                'photo_path' => NULL,
                'created_at' => '2022-08-20 05:01:23',
                'updated_at' => '2022-08-20 05:02:13',
            ),
        ));


    }
}
