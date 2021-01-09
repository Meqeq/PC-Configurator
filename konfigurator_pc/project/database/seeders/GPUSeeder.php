<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GPUSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gpu')->insert([
            'name' => 'Gigabyte GeForce RTX 2060 Windforce',
            'desc' => '...',
            'price' => 2089,
            'pcie_int' => 'PCI Express 3.0 x16',
            'producer' => 'Gigabyte',
            'chipset' => 'GeForce',
            'RAM' => 4
        ]);


        DB::table('gpu')->insert([
            'name' => 'MSI GeForce RTX 2080 Sea Hawk',
            'desc' => '...',
            'price' => 3644,
            'pcie_int' => 'PCI Express 3.0 x16',
            'producer' => 'MSI',
            'chipset' => 'GeForce',
            'RAM' => 8
        ]);

        DB::table('gpu')->insert([
            'name' => 'Asus ROG Strix Radeon RX 5600 XT',
            'desc' => '...',
            'price' => 2081,
            'pcie_int' => 'PCI Express 3.0 x16',
            'producer' => 'Asus',
            'chipset' => 'Radeon',
            'RAM' => 4
        ]);
    }
}
