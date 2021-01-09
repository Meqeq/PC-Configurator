<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CPUSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cpu')->insert([
            'name' => 'Intel Core i5-10400F',
            'desc' => '...',
            'frequency' => 2900,
            'cores' => 4,
            'price' => 699,
            'socket' => '1200',
            'producer' => 'Intel'
        ]);

        DB::table('cpu')->insert([
            'name' => 'AMD Ryzen 5 3600',
            'desc' => '...',
            'frequency' => 3600,
            'cores' => 6,
            'price' => 1099,
            'socket' => 'AM4',
            'producer' => 'AMD'
        ]);

        DB::table('cpu')->insert([
            'name' => 'Intel Core i5-9400',
            'desc' => '...',
            'frequency' => 2900,
            'cores' => 4,
            'price' => 729,
            'socket' => '1151',
            'producer' => 'Intel'
        ]);

    }
}
