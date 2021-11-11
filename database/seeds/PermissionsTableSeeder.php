<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Permission::create([
            'name' => 'admin' // id 1
        ]);
        App\Permission::create([
            'name' => 'user' // id 2
        ]);
     
        $admin = App\Role::where('name', 'admin')->first();
        $admin->permissions()->attach([1]);

        $user = App\Role::where('name', 'user')->first();
        $user->permissions()->attach([2]);
    }
}
