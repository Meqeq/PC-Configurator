<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mb')->insert([
            'mb_id' => '1',
            'name' => 'Gigabyte B450 AORUS ELITE',
            'desc' => '...',
            'compatibility' => '{}',
            'price' => 399,
        ]);
        DB::table('mb')->insert([
            'mb_id' => '2',
            'name' => 'Gigabyte X570 GAMING X',
            'desc' => '...',
            'compatibility' => '{}',
            'price' => 769,
        ]);
        DB::table('mb')->insert([
            'mb_id' => '3',
            'name' => 'MSI B450 TOMAHAWK MAX',
            'desc' => '...',
            'compatibility' => '{}',
            'price' => 449,
        ]);
    }
}
