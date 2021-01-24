<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('case')->insert([
            'name' => 'SilentiumPC Signum SG1 TG',
            'desc' => '...',
            'price' => 189,
            'type' => 'ATX m-ATX Mini-ITX',
            'producer' => 'SilentiumPC',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/2/pr_2019_2_27_13_16_21_251_00.jpg',
            'compatibility' => json_encode(['mbd'=>['size'=>["ATX", 'm-ATX', 'ITX']]]),
        ]);
        DB::table('case')->insert([
            'name' => 'be quiet! Pure Base 500DX Black',
            'desc' => '...',
            'price' => 479,
            'type' => 'ATX m-ATX Mini-ITX',
            'producer' => 'be quiet!',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/4/pr_2020_4_23_11_50_6_672_00.jpg',
            'compatibility' => json_encode(['mbd'=>['size'=>["ATX", 'm-ATX', 'ITX']]]),
        ]);
        DB::table('case')->insert([
            'name' => 'Zalman Chasis T6',
            'desc' => '...',
            'price' => 119,
            'type' => 'ATX m-ATX Mini-ITX',
            'producer' => 'Zalman',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/6/pr_2019_6_25_9_52_40_163_03.jpg',
            'compatibility' => json_encode(['mbd'=>['size'=>["ATX", 'm-ATX', 'ITX']]]),
        ]);
    }
}
