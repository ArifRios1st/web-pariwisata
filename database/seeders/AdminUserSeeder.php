<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Administrator']);
        $adminUser = User::factory()->create([
            'name' => 'Ibrani Pangestu Irawan',
            'email' => 'admin@admin.com',
            'gender' => 'm',
            'address' => 'Psr. Elang No. 110, Pekalongan 71664, Riau',
            'birth_date' => '1998-05-14',
            'password' => bcrypt('password'),
        ]);
        $adminUser->assignRole('Administrator');
    }
}
