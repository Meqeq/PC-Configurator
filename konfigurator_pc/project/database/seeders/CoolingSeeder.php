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
            'name' => 'SilentiumPC Fera 3 120mm',
            'desc' => '...',
            'price' => 105,
            'producer' => 'SilentiumPC',
            'socket' => 'AM4 AM3 1151 1200',
            'tpd' => 100,
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2018/9/pr_2018_9_27_13_38_9_216_00.jpg'
        ]);

        DB::table('cooling')->insert([
            'name' => 'be quiet! Pure Loop 360mm 3x120mm',
            'desc' => '...',
            'price' => 529,
            'producer' => 'be quiet!',
            'socket' => 'AM4 AM3 1151 1200',
            'tpd' => 30,
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/10/pr_2020_10_2_12_3_25_33_04.jpg'
        ]);

        DB::table('cooling')->insert([
            'name' => 'Noctua NH-D15 2x140mm',
            'desc' => '...',
            'price' => 469,
            'producer' => 'Noctua',
            'socket' => 'AM4 AM3 1151 1200',
            'tpd' => 170,
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2017/10/pr_2017_10_12_11_24_1_915_00.jpg'
        ]);
    }
}
