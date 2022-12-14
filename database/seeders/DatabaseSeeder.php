<?php

namespace Database\Seeders;

use App\Models\Destination;
use App\Models\Packet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Product::factory(10)->create();
        $this->call([
            AdminUserSeeder::class,
            UsersTableSeeder::class,
            DestinationsTableSeeder::class,
            PacketsTableSeeder::class,
            OrdersTableSeeder::class,
        ]);
    }
}
