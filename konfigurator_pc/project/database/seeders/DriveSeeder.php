<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drive')->insert([
            'name' => 'Crucial MX500 500 GB 2.5" SATA III',
            'desc' => 'Obejrzyj poniższy materiał wideo i dowiedz się, jakie zalety posiada dysk SSD Crucial MX500. W jedyne 60 sekund zapoznaj się z produktem i odkryj jego najważniejsze cechy.',
            'price' => 265,
            'capacity' => 500,
            'type' => 'HDD',
            'producer' => 'CRUCIAL',
            'interface' => 'SATA',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2018/1/pr_2018_1_3_14_2_15_279_01.jpg'
        ]);

        DB::table('drive')->insert([
            'name' => 'ADATA 2TB M.2 PCIe NVMe XPG SX8200 Pro ',
            'desc' => 'Ten przeznaczony dla entuzjastów PC oraz zapalonych graczy i overclockerów dysk SSD jest wyposażony w bardzo szybki interfejs M.2 PCIe Gen3 x4, zapewniający utrzymywane maks. szybkości odczytu/zapisu na poziomie nawet 3500/3000 MB/s, pozostawiając daleko w tyle możliwości tradycyjnego napędu HDD.',
            'price' => 1019,
            'capacity' => 2000,
            'type' => 'SSD M.2',
            'producer' => 'ADATA',
            'interface' => 'M2',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2018/11/pr_2018_11_9_9_33_50_536_00.jpg'
        ]);

        DB::table('drive')->insert([
            'name' => 'Toshiba P300 1TB 7200obr. 64MB OEM',
            'desc' => 'Toshiba P300 to szybki, niezawodny i wszechstronny dysk. Jeżeli potrzebujesz dodatkowej przestrzeni na zdjęcia, filmy, gry, czy muzykę, to znalazłeś produkt idealny dla siebie. Ten uniwersalny dysk sprawdzi się idealnie jako magazyn plików dla Twojego domowego komputera. Wysoka prędkość obrotów pozwala na płynny dostęp do folderów oraz niezakłócone działanie podczas pracy.',
            'price' => 175,
            'capacity' => 1000,
            'type' => 'HDD',
            'producer' => 'Toshiba',
            'interface' => 'SATA',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2017/7/pr_2017_7_26_14_15_32_657.jpg'
        ]);
    }
}
