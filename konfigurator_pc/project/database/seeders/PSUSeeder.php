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
            'name' => 'SilentiumPC Vero L3 500W',
            'desc' => '...',
            'price' => 207,
            'power' => 500,
            'producer' => 'SilentiumPC'
        ]);
        DB::table('psu')->insert([
            'name' => 'be quiet! SYSTEM POWER 9 500W',
            'desc' => '...',
            'price' => 249,
            'power' => 500,
            'producer' => 'be quiet!'
        ]);
        DB::table('psu')->insert([
            'name' => 'SilentiumPC Vero M3 600W',
            'desc' => '...',
            'price' => 266,
            'power' => 600,
            'producer' => 'SilentiumPC'
        ]);
    }
}
