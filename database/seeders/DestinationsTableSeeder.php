<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('destinations')->delete();

        DB::table('destinations')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Pantai Sri Tanjung',
                'slug' => 'pantai-sri-tanjung',
                'description' => '<p>Pantai Sri tanjung merupakan salah satu pantai yang ada di rupat utara tepatnya di desa tanjung jaya. Pantai di sri tanjung tak kalah cantik nya karena pantai ini memliki 2 menara suar yang tinggi dan juga pantai ini memliki jembatan yang panjang mengarah ke laut lepas.</p>',
                'photo_path' => 'photos/S2evSyDk65UQAO8C9qBi8BheF7uM9b5IQtKYiCmN.jpg',
                'created_at' => '2022-08-18 21:05:24',
                'updated_at' => '2022-08-19 15:43:12',
            ),
            1 =>
            array (
                'id' => 3,
                'name' => 'Pantai Beting Aceh',
                'slug' => 'pantai-beting-aceh',
                'description' => '<p>Pantai beting aceh adalah salah satu yang sangat menjadi sorotan yang ada di pulau rupat utara karena pantai ini begitu indah karena memliki pantai yang bersih dan pulau benting aceh ini sering di juluki pantai berberbisik. Pantai ini pulau yang terpisah dari pulau rupat utara karena untuk berkunjung kesana kita harus melewati laut untuk bisa ke pulau beting aceh</p>',
                'photo_path' => 'photos/XACjInUZAxKh8wiRUkTDSt8PppCXX0hLGJpcUcer.jpg',
                'created_at' => '2022-08-18 21:05:24',
                'updated_at' => '2022-08-19 15:41:49',
            ),
            2 =>
            array (
                'id' => 4,
                'name' => 'Pantai Pesona',
                'slug' => 'pantai-pesona',
                'description' => '<p>Pantai pesona adalah salah satu pantai yang ada didesa teluk rhu. Pantai ini juga memliki keindahan pantai yang kalah cantik dengan pantai lain nya yang ada di pulau rupat utara&nbsp;</p>',
                'photo_path' => NULL,
                'created_at' => '2022-08-18 21:05:24',
                'updated_at' => '2022-08-19 15:42:47',
            ),
            3 =>
            array (
                'id' => 5,
                'name' => 'Pantai Bestari',
                'slug' => 'pantai-bestari',
                'description' => '<p>Pantai Bestari adalah salah satu pantai yang ada di desa air putih. Pantai yang dekat dengan pemukiman masyarakat&nbsp;</p>',
                'photo_path' => NULL,
                'created_at' => '2022-08-18 21:05:24',
                'updated_at' => '2022-08-19 17:17:25',
            ),
        ));


    }
}
