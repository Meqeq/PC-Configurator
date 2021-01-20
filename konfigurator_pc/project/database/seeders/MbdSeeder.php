<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MbdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mbd')->insert([
            'name' => 'Gigabyte B450 AORUS ELITE',
            'desc' => '...',
            'compatibility' => '{"cpu":{"socket":["AM4"]},"ram":{"type":["DDR4"]}}',
            'price' => 399,
        ]);
        DB::table('mbd')->insert([
            'name' => 'Gigabyte X570 GAMING X',
            'desc' => '...',
            'compatibility' => '{}',
            'price' => 769,
        ]);
        DB::table('mbd')->insert([
            'name' => 'MSI B450 TOMAHAWK MAX',
            'desc' => '...',
            'compatibility' => '{}',
            'price' => 449,
        ]);
    }
}
