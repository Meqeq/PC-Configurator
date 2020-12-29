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
            'gpu_id' => '1',
            'name' => 'Gigabyte GeForce RTX 2060 Windforce',
            'desc' => '...',
            'price' => 2089,
            'pcie_int' => 'PCI Express 3.0 x16',
        ]);


        DB::table('gpu')->insert([
            'gpu_id' => '2',
            'name' => 'MSI GeForce RTX 2080 Sea Hawk',
            'desc' => '...',
            'price' => 3644,
            'pcie_int' => 'PCI Express 3.0 x16',
        ]);

        DB::table('gpu')->insert([
            'gpu_id' => '3',
            'name' => 'Asus ROG Strix Radeon RX 5600 XT',
            'desc' => '...',
            'price' => 2081,
            'pcie_int' => 'PCI Express 3.0 x16',
        ]);
    }
}
