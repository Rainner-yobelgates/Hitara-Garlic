<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Hitara',
            'email' => 'hitaragarlic@gmail.com',
            'password' => bcrypt('adminhitara321'),
            'role_id' => 1
     ]);
    }
}
