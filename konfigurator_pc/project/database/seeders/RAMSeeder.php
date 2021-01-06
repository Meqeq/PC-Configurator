<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RAMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ram')->insert([
            'name' => 'HyperX Fury RGB, DDR4, 16 GB',
            'desc' => '...',
            'price' => 369,
            'capacity' => 16,
            'speed' => 3200,
            'type' => 'DDR4'
        ]);
        DB::table('ram')->insert([
            'name' => 'Corsair Vengeance RGB PRO, DDR4, 16 GB',
            'desc' => '...',
            'price' => 437,
            'capacity' => 16,
            'speed' => 3200,
            'type' => 'DDR4'
        ]);
        DB::table('ram')->insert([
            'name' => 'Crucial Ballistix Black at DDR4 3200 DRAM Desktop Gaming Memory Kit 16GB',
            'desc' => '...',
            'price' => 319,
            'capacity' => 16,
            'speed' => 3200,
            'type' => 'DDR4'
        ]);
    }
}
