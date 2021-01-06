<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoolingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cooling')->insert([
            'name' => 'Nzxt Kraken X53 Liquid Cooling',
            'desc' => '...',
            'price' => 579
        ]);
        DB::table('cooling')->insert([
            'name' => 'Nzxt Kraken Z63 Liquid Cooling',
            'desc' => '...',
            'price' => 1099
        ]);
        DB::table('cooling')->insert([
            'name' => 'ALSEYE ALSEYE H120 120mm',
            'desc' => '...',
            'price' => 260
        ]);
    }
}
