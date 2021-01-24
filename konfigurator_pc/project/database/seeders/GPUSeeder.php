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
            'name' => 'MSI GeForce RTX 3070 Gaming X Trio 8GB GDDR6',
            'desc' => 'Wyposażona w architekturę NVIDIA Ampere oraz 8GB pamięci GDDR6, karta graficzna MSI GeForce RTX 3070 Gaming X Trio 8GB zaoferuje Ci nowatorskie rozwiązania z zakresu generowania grafiki oraz bezkompromisową wydajność. Naciesz oczy fotorealistyczną grafiką dzięki technologii Ray Tracing oraz graj w najnowsze produkcje z niespotykaną płynnością. A o stabilność i niezawodność pracy zadbają m.in. nowe wentylatory TORX 4.0.',
            'price' => 3999,
            'pcie_int' => 'PCI Express 3.0 x16',
            'producer' => 'MSI',
            'chipset' => 'Nvidia',
            'RAM' => 8,
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/10/pr_2020_10_8_12_9_10_401_00.jpg'
        ]);

        DB::table('gpu')->insert([
            'name' => 'Gigabyte GeForce GT 1030 2GB GDDR5',
            'desc' => ' Nowa karta graficzna Gigabyte GeForce GT1030 pozwoli Ci płynnie zagrać w każdą grę dostępną na rynku. Przygotuje Cię również na nadchodzące premiery, umożliwiając grę na wysokich detalach. Nowy układ dysponuje przełomową architekturą NVIDIA Pascal, oferując najlepsze doznania wizualne, ogromną wydajność oraz sprawność energetyczną. Sprawdź, jak Gigabyte GeForce GT1030 wygląda w rzeczywistości. Chwyć zdjęcie poniżej i przeciągnij je w lewo lub prawo, aby obrócić produkt, lub skorzystaj z przycisków nawigacyjnych.',
            'price' => 319,
            'pcie_int' => 'PCI Express 3.0 x16',
            'producer' => 'Gigabyte',
            'chipset' => 'Nvidia',
            'RAM' => 2,
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2017/7/pr_2017_7_24_7_49_13_630.png'
        ]);

        DB::table('gpu')->insert([
            'name' => 'Gigabyte GeForce RTX 3060 Ti Gaming OC 8GB GDDR6',
            'desc' => 'Graj na wysokim poziomie detali i płynności oraz korzystaj z wyjątkowych technologii, takich jak Ray Tracing. Oparta o architekturę NVIDIA Turing karta graficzna Gigabyte GeForce RTX 3060 Ti Gaming OC to wydajna konstrukcja, która z powodzeniem sprosta wymaganiom zapalonych graczy. Dzięki mocnemu układowi chłodzenia WINDFORCE 3X, zawsze będzie pracować w optymalnych temperaturach. Możesz też podkręcać i monitorować stan karty poprzez oprogramowanie Aorus Engine, a także sterować wbudowanym podświetleniem dzięki RGB Fusion 2.0.',
            'price' => 3049,
            'pcie_int' => 'PCI Express 3.0 x16',
            'producer' => 'Gigabyte',
            'chipset' => 'Nvidia',
            'RAM' => 8,
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/12/pr_2020_12_1_15_30_31_98_07.jpg'
        ]);

        DB::table('gpu')->insert([
            'name' => 'Gigabyte Radeon RX 580 GAMING 8GB GDDR5 rev 2.0',
            'desc' => 'Ciesz się płynną rozgrywką z kartą Gigabyte Radeon RX 580 GAMING 8GB rev 2.0, opartą o architekturę Polaris oraz 8GB pamięci GDDR5. Solidna konstrukcja, wykorzystująca podzespoły Ultra Durable, pozwala też na łatwy i bezpieczny overclocking z poziomu aplikacji Aorus Engine. W najgorętszych momentach możesz liczyć na wsparcie układu chłodzenia Windforce 2X, który znakomicie rozprasza ciepło. Tobie pozostaje skupić się na walce i zdobywać kolejne e-trofea.',
            'price' => 1699,
            'pcie_int' => 'PCI Express 3.0 x16',
            'producer' => 'Gigabyte',
            'chipset' => 'Radeon',
            'RAM' => 8,
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/12/pr_2020_12_23_8_33_38_753_04.jpg'
        ]);

        DB::table('gpu')->insert([
            'name' => 'Gigabyte GeForce GTX 1660 OC 6GB GDDR5',
            'desc' => 'Karta Gigabyte GeForce GTX 1660 OC oferuje w najnowszych grach wydajność porównywalną z osiągami modelu GeForce GTX 1070. Dzięki wykorzystaniu nowoczesnej architektury NVIDIA Turing możesz cieszyć się wyjątkowo płynną rozgrywką, o której stabilność zadba wyjątkowo efektywny układ chłodzenia Windforce 2X. Zyskujesz też gwarancję długiej niezawodności, gdyż kartę zbudowano w oparciu o najwyższej jakości komponenty oraz zabezpieczono stylowym backplatem.',
            'price' => 1499,
            'pcie_int' => 'PCI Express 3.0 x16',
            'producer' => 'Gigabyte',
            'chipset' => 'Nvidia',
            'RAM' => 6,
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/3/pr_2019_3_13_19_31_2_889_05.jpg'
        ]);

        DB::table('gpu')->insert([
            'name' => 'ASUS Radeon RX 6900 XT 16GB GDDR6',
            'desc' => 'Stworzona aby zapewnić najwyższą wydajność wszystkim graczom, wyjątkowa karta ASUS RX 6900 XT 16GB GDDR6 wykorzystuje nowatorską architekturą AMD RDNA 2 oraz 16GB pamięci GDDR6. Dzięki temu zapewnia wyjątkową jakość i płynność obrazu podczas gamingu w 4K oraz z wykorzystaniem najnowszych technologii graficznych. Ciesz się rozwiązaniami od AMD, w tym również sprzętowym Ray Tracingiem i doświadcz gier w zupełnie nowy sposób.',
            'price' => 6299,
            'pcie_int' => 'PCI Express 3.0 x16',
            'producer' => 'Asus',
            'chipset' => 'Radeon',
            'RAM' => 16,
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2021/1/pr_2021_1_5_13_35_35_353_05.jpg'
        ]);

        DB::table('gpu')->insert([
            'name' => 'PowerColor Radeon RX 550 Red Dragon 2GB GDDR5',
            'desc' => 'Stworzona aby zapewnić najwyższą wydajność wszystkim graczom, wyjątkowa karta ASUS RX 6900 XT 16GB GDDR6 wykorzystuje nowatorską architekturą AMD RDNA 2 oraz 16GB pamięci GDDR6. Dzięki temu zapewnia wyjątkową jakość i płynność obrazu podczas gamingu w 4K oraz z wykorzystaniem najnowszych technologii graficznych. Ciesz się rozwiązaniami od AMD, w tym również sprzętowym Ray Tracingiem i doświadcz gier w zupełnie nowy sposób.',
            'price' => 499,
            'pcie_int' => 'PCI Express 3.0 x16',
            'producer' => 'PowerColor',
            'chipset' => 'Radeon',
            'RAM' => 2,
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2021/1/pr_2021_1_19_16_52_46_264_04.jpg'
        ]);
    }
}
