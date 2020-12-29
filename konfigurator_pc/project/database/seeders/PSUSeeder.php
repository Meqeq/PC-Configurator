<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PSUSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('psu')->insert([
            'psu_id' => '1',
            'name' => 'SilentiumPC Vero L3 500W',
            'desc' => '...',
            'price' => 207,
            'power' => 500
        ]);
        DB::table('psu')->insert([
            'psu_id' => '2',
            'name' => 'be quiet! SYSTEM POWER 9 500W',
            'desc' => '...',
            'price' => 249,
            'power' => 500
        ]);
        DB::table('psu')->insert([
            'psu_id' => '3',
            'name' => 'SilentiumPC Vero M3 600W',
            'desc' => '...',
            'price' => 266,
            'power' => 600
        ]);
    }
}
