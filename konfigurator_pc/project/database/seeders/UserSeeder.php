<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john.doe@gmail.com',
            'password' => bcrypt('secret'),
            'user_type' => 'normal'
        ]);

        DB::table('users')->insert([
            'name' => 'Bartosz Chwala',
            'email' => 'chwala69@gmail.com',
            'password' => bcrypt('secret69'),
            'user_type' => 'normal'
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin31337@gmail.com',
            'password' => bcrypt('toor'),
            'user_type' => 'admin'
        ]);
    }
}
