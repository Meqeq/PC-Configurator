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
            'name' => 'SilentiumPC Signum SG7V Evo TG ARGB',
            'desc' => '...',
            'price' => 399,
            'type' => 'Full',
            'producer' => 'SilentiumPC'
        ]);
        DB::table('case')->insert([
            'name' => 'Fractal Design Meshify C TG',
            'desc' => '...',
            'price' => 429,
            'type' => 'Midi',
            'producer' => 'Fractal Design'
        ]);
        DB::table('case')->insert([
            'name' => 'MSI MAG Forge 100M',
            'desc' => '...',
            'price' => 219,
            'type' => 'Mini',
            'producer' => 'MSI'
        ]);
    }
}
