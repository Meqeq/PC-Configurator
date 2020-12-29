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
            'drive_id' => '1',
            'name' => 'SSD Lexar NM610 500 GB M.2',
            'desc' => '...',
            'price' => 249,
            'size' => 500,
            'type' => 'NVMe'
        ]);
        DB::table('drive')->insert([
            'drive_id' => '2',
            'name' => 'SSD Western Digital Blue 500 GB 2.5" SATA III',
            'desc' => '...',
            'price' => 269,
            'size' => 500,
            'type' => 'SATA III'
        ]);
        DB::table('drive')->insert([
            'drive_id' => '3',
            'name' => 'Crucial MX500 500 GB 2.5" SATA III',
            'desc' => '...',
            'price' => 265,
            'size' => 500,
            'type' => 'SATA III'
        ]);
    }
}
