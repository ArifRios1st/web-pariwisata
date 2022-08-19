<?php

namespace Database\Seeders;

use App\Models\Destination;
use App\Models\Packet;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Destination::factory(50)->create()->each(function ($destination) {
            $packet = Packet::factory(5)->create(['destination_id'=> $destination->id]);
            $destination->packets()->saveMany($packet);

        });
    }
}
