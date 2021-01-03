<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CPUSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cpu')->insert([
            'name' => 'Intel Core i5-10400F',
            'desc' => 'Częstotliwość taktowania procesora [GHz]: 2.9
Liczba rdzeni: 6
Odblokowany mnożnik: Nie
Typ gniazda: Socket 1200
Załączone chłodzenie: Tak
',
            'frequency' => 2900,
            'cores' => 4,
            'price' => 699,
            'socket' => '1200',
        ]);

        DB::table('cpu')->insert([
            'name' => 'AMD Ryzen 5 3600',
            'desc' => '...',
            'frequency' => 3600,
            'cores' => 6,
            'price' => 1099,
            'socket' => 'AM4',
        ]);

        DB::table('cpu')->insert([
            'name' => 'Intel Core i5-9400',
            'desc' => '...',
            'frequency' => 2900,
            'cores' => 4,
            'price' => 729,
            'socket' => '1151',
        ]);

    }
}
