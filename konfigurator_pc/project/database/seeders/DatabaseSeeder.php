<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);

        $this->call(CPUSeeder::class);
        $this->call(GPUSeeder::class);
        $this->call(MbSeeder::class);
        $this->call(RAMSeeder::class);
        $this->call(DriveSeeder::class);
        $this->call(PSUSeeder::class);
        $this->call(CoolingSeeder::class);
        $this->call(CaseSeeder::class);
    }
}
