<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Role::create([
            'name' => 'admin'
      ]);
      App\Role::create([
            'name' => 'user'
      ]);

    }
}
