<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drive')->insert([
            'name' => 'SSD Lexar NM610 500 GB M.2',
            'desc' => '...',
            'price' => 249,
            'capacity' => 500,
            'type' => 'SSD',
            'producer' => 'Lexar',
            'interface' => 'SATA'
        ]);
        DB::table('drive')->insert([
            'name' => 'SSD Western Digital Blue 500 GB 2.5" SATA III',
            'desc' => '...',
            'price' => 269,
            'capacity' => 500,
            'type' => 'SSD',
            'producer' => 'Western Digital',
            'interface' => 'SATA'
        ]);
        DB::table('drive')->insert([
            'name' => 'Crucial MX500 500 GB 2.5" SATA III',
            'desc' => '...',
            'price' => 265,
            'capacity' => 500,
            'type' => 'HDD',
            'producer' => 'CRUCIAL',
            'interface' => 'SATA'
        ]);
    }
}
