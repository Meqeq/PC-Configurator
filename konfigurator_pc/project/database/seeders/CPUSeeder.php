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
            'cpu_id' => '1',
            'name' => 'Intel Core i5-10400F',
            'desc' => 'Częstotliwość taktowania procesora [GHz]: 2.9
Liczba rdzeni: 6
Odblokowany mnożnik: Nie
Typ gniazda: Socket 1200
Załączone chłodzenie: Tak
',
            'price' => 699,
            'socket' => '1200',
        ]);

        DB::table('cpu')->insert([
            'cpu_id' => '2',
            'name' => 'AMD Ryzen 5 3600',
            'desc' => '...',
            'price' => 1099,
            'socket' => 'AM4',
        ]);

        DB::table('cpu')->insert([
            'cpu_id' => '3',
            'name' => 'Intel Core i5-9400',
            'desc' => '...',
            'price' => 729,
            'socket' => '1151',
        ]);

    }
}
