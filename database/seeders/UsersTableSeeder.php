<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->delete();

        DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 2,
                'name' => 'fika',
                'email' => 'fika@mail.com',
                'gender' => 'f',
                'address' => 'bks fika1234',
                'birth_date' => '2022-08-03',
                'email_verified_at' => NULL,
                'password' => '$2y$10$MJq5AiPXat.5c1YpIys63u855Ix4zFX6jurxg9.p/nUwc7hdtyLk.',
                'remember_token' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2022-08-18 23:32:38',
                'updated_at' => '2022-08-18 23:32:38',
            ),
            1 =>
            array (
                'id' => 3,
                'name' => 'Kafika',
                'email' => 'kafika@mail.com',
                'gender' => 'f',
                'address' => 'Bks',
                'birth_date' => '2022-08-04',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9/fGd0dt4Y06bBMZysuUOe954W034JWtLtEDR/5ktI3RVH2lNZxMi',
                'remember_token' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2022-08-19 00:11:48',
                'updated_at' => '2022-08-19 00:11:48',
            ),
            2 =>
            array (
                'id' => 4,
                'name' => 'Agustian',
                'email' => 'agus1808@gmail.com',
                'gender' => 'm',
                'address' => 'Jalan rintis',
                'birth_date' => '2022-08-09',
                'email_verified_at' => NULL,
                'password' => '$2y$10$uQKpVVGoCVOTM/HNXUfF7O9n570ZkC7NzfSoUj4ZSeZknFmGAUmee',
                'remember_token' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2022-08-20 04:36:30',
                'updated_at' => '2022-08-20 04:36:30',
            ),
            3 =>
            array (
                'id' => 5,
                'name' => 'Fitrah Desmalini',
                'email' => 'fitrahdesmalini15@gmail.com',
                'gender' => 'f',
                'address' => 'Bengkalis',
                'birth_date' => '2001-12-15',
                'email_verified_at' => NULL,
                'password' => '$2y$10$boYqnFdu6UldDUmxJQcJ6OIzxO5jjaK.OYNRqK7tlrA71o1GFsf0y',
                'remember_token' => '3hIkz5pEZSLgOMOXIRp3U9woU9sBJrjizIt3VJfbkH0IpdsWnONEgfUkVTOJ',
                'profile_photo_path' => NULL,
                'created_at' => '2022-08-20 04:54:31',
                'updated_at' => '2022-08-20 04:54:31',
            ),
            4 =>
            array (
                'id' => 6,
                'name' => 'Gina Silalahi',
                'email' => 'gina0578@gmail.com',
                'gender' => 'f',
                'address' => 'Jalan Pramuka GG.permata',
                'birth_date' => '1999-08-25',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DLW1vU4Fasx/8orU/mVDIeudsXz8/ktTrcqTaxlRcaDrJ8dd1OZ0a',
                'remember_token' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2022-08-20 04:55:18',
                'updated_at' => '2022-08-20 04:55:18',
            ),
            5 =>
            array (
                'id' => 7,
                'name' => 'Nama saya saya',
                'email' => 'oke@gmail.cok',
                'gender' => 'm',
                'address' => 'Jalan sini',
                'birth_date' => '2022-08-17',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wU9gvTrd7DyZP..w2yjcLOwF0afXTQgAlU4Rd2ZrOpcPiaMGYHhlO',
                'remember_token' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2022-08-20 05:00:52',
                'updated_at' => '2022-08-20 05:00:52',
            ),
            6 =>
            array (
                'id' => 8,
                'name' => 'Jumini',
                'email' => 'juminiijum2@gmail.com',
                'gender' => 'f',
                'address' => 'Jl.Parit Aman',
                'birth_date' => '2001-02-16',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zEo4fpJLGe1H1oCVC/uOtOOyZfvuufjEtBAYrhqGWLlU1V3ix6TRe',
                'remember_token' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2022-08-20 06:59:12',
                'updated_at' => '2022-08-20 06:59:12',
            ),
            7 =>
            array (
                'id' => 9,
                'name' => 'sri',
                'email' => 'sribks298@gmail.com',
                'gender' => 'm',
                'address' => 'duri',
                'birth_date' => '2022-08-08',
                'email_verified_at' => NULL,
                'password' => '$2y$10$A1ZzMFX0pmp4jcUVimkX7O94fb84yO.wzMfDPrejg8v9BwrHnFOlu',
                'remember_token' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2022-08-20 07:04:29',
                'updated_at' => '2022-08-20 07:04:29',
            ),
            8 =>
            array (
                'id' => 10,
                'name' => 'Ravi Iswaldi',
                'email' => 'raviiswaldi11@gmail.com',
                'gender' => 'm',
                'address' => 'jl sungai alam',
                'birth_date' => '2002-01-18',
                'email_verified_at' => NULL,
                'password' => '$2y$10$c7m4GIlS/lJv0OlhqpAGJOUzzGqj75iIPrToMLpDD8Cc/Ky/yjFXu',
                'remember_token' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2022-08-20 07:17:52',
                'updated_at' => '2022-08-20 07:17:52',
            ),
        ));


    }
}
