<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MbdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mbd')->insert([
            'name' => 'Gigabyte B450 AORUS ELITE',
            'desc' => 'Wybierz sprzęt nie wymuszający żadnych kompromisów i dołącz do elitarnego grona posiadaczy sprzętu sygnowanego marką AORUS. Oferowana płyta główna, napędzana chipsetem B450, umożliwia wykorzystanie procesorów AMD Ryzen 2. generacji oraz zintegrowanych z nimi układów graficznych AMD Vega. Cztery sloty DIMM obsłużą moduły DDR4 o taktowaniu nawet 3200 MHz (O.C.), a slot M.2 umożliwi podłączenia najszybszych dysków SSD na rynku.',
            'compatibility' => json_encode(['cpu'=>['socket'=>["AM4"]], "ram"=>['type'=>'DDR4'], 'drive'=>['interface'=>['M2', 'SATA']]]),
            'price' => 419,
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2018/9/pr_2018_9_7_7_30_44_651_02.jpg',
            'size' => "ATX"
        ]);

        DB::table('mbd')->insert([
            'name' => 'ASRock B460 Phantom Gaming 4',
            'desc' => 'Wejdź do świata gamingu z nowymi procesorami Intel Core 10. generacji oraz płytą główną ASRock B460 Phantom Gaming 4. Ta dedykowana graczom platforma wspiera pamięci RAM DDR o taktowaniu nawet 2933 MHz oraz szybkie dyski SSD M.2. Dzięki wbudowanemu portowi HDMI możesz korzystać z wbudowanego w CPU układu graficznego, a także połączyć dwie karty graficzne dzięki technologii AMD CrossFireX.',
            'compatibility' => json_encode(['cpu'=>['socket'=>["1200"]], "ram"=>['type'=>['DDR4']], 'drive'=>['interface'=>['M2', 'SATA']]]),
            'price' => 419,
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/5/pr_2020_5_25_9_9_8_671_04.jpg',
            'size' => "ATX"
        ]);

        DB::table('mbd')->insert([
            'name' => 'MSI B450 TOMAHAWK MAX',
            'desc' => 'Wyposaż się w broń, która zapewni maksymalną wydajność i stabilność każdej rozgrywki. MSI B450 TOMAHAWK MAX z serii Arsenal Gaming to wytrzymała i wydajna konstrukcja, wyposażona w socket AM4 oraz chipset B450. Umożliwi Ci wykorzystanie procesorów AMD Ryzen 3. lub 2. generacji oraz modułów RAM DDR4 o taktowaniu nawet 4133 MHz (w trybie OC). Ponadto rozświetlisz wnętrz obudowy stylowym blaskiem podświetlenia RGB.',
            'compatibility' => json_encode(['cpu'=>['socket'=>["AM4"]], "ram"=>['type'=>['DDR4']], 'drive'=>['interface'=>['M2', 'SATA']]]),
            'price' => 429,
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/8/pr_2019_8_2_12_56_4_381_00.jpg',
            'size' => "ATX"
        ]);

        DB::table('mbd')->insert([
            'name' => 'MSI Z490-A PRO',
            'desc' => 'Seria płyt głównych PRO skierowana jest przede wszystkim do wymagających użytkowników dla których ważna jest wydajność oraz stabilność przy dużych obciążeniach systemu. Zyskaj dzięki płycie MSI Z490-A PRO profesjonalne narzędzie do najbardziej wymagających zastosowań, zbuduj swoją stację roboczą, która zapewni Ci optymalną i bezproblemową pracę.',
            'compatibility' => json_encode(['cpu'=>['socket'=>["1200"]], "ram"=>['type'=>['DDR4']], 'drive'=>['interface'=>['M2', 'SATA']]]),
            'price' => 769,
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/5/pr_2020_5_5_21_41_43_403_00.jpg',
            'size' => "ATX"
        ]);

        DB::table('mbd')->insert([
            'name' => 'MSI MAG B460 TOMAHAWK',
            'desc' => 'Seria płyt głównych MAG narodziła się z pasji do gier stworzoną ją po to, aby zapewnić graczom najbardziej efektywną i nieprzerwaną rozgrywkę. MSI MAG B460 TOMAHAWK ,dzięki rygorystycznym testom jakości została symbolem solidności i trwałości. Skoncentrowana na zapewnieniu jak najlepszych wrażeń użytkownikom zapewnia szybką instalację, która w połączeniu z przyjaznym interfejsem jest idealną propozycją zarówno dla zaawansowanych jaki i początkujących graczy.',
            'compatibility' => json_encode(['cpu'=>['socket'=>["1200"]], "ram"=>['type'=>['DDR4']], 'drive'=>['interface'=>['M2', 'SATA']]]),
            'price' => 569,
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/5/pr_2020_5_27_12_19_16_814_00.jpg',
            'size' => "m-ATX"
        ]);

        DB::table('mbd')->insert([
            'name' => 'MSI B365M PRO-VH',
            'desc' => 'Zyskaj doskonałą bazę pod komputer do profesjonalnych zastosowań Płyta główna MSI B365M PRO-VH jest dedykowana do obsługi procesorów Intel 9. i 8. generacji, kompatybilnych z socketem 1151. W połączeniu z technologią Core Boost możesz wykorzystać pełen potencjał CPU, który wspomagać będzie pamięć RAM DDR4 o taktowaniu nawet 2666 MHz. Postaw na jakość, która nie zawiedzie Cię w żadnej sytuacji.',
            'compatibility' => json_encode(['cpu'=>['socket'=>["1151"]], "ram"=>['type'=>['DDR4']], 'interface'=>['type'=>['SATA']]]),
            'price' => 259,
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/5/pr_2020_5_27_12_19_16_814_00.jpg',
            'size' => "m-ATX"
        ]);

        DB::table('mbd')->insert([
            'name' => 'Gigabyte X570 AORUS ELITE',
            'desc' => 'Wyposaż się w broń, która zapewni maksymalną wydajność i stabilność każdej rozgrywki. MSI B450 TOMAHAWK MAX z serii Arsenal Gaming to wytrzymała i wydajna konstrukcja, wyposażona w socket AM4 oraz chipset B450. Umożliwi Ci wykorzystanie procesorów AMD Ryzen 3. lub 2. generacji oraz modułów RAM DDR4 o taktowaniu nawet 4133 MHz (w trybie OC). Ponadto rozświetlisz wnętrz obudowy stylowym blaskiem podświetlenia RGB.',
            'compatibility' => json_encode(['cpu'=>['socket'=>["AM4"]], "ram"=>['type'=>['DDR4']], 'drive'=>['interface'=>['M2', 'SATA']]]),
            'price' => 859,
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/7/pr_2019_7_4_12_4_46_676_04.jpg',
            'size' => "ATX"
        ]);

        DB::table('mbd')->insert([
            'name' => 'ASUS PRIME Z390-P',
            'desc' => 'Skorzystaj z możliwości procesorów Intel Core 8. i 9. generacji, wybierając jako bazę do swojego komputera tą unikalną płytę główną. PRIME Z390-P umożliwi Ci przy tym skorzystanie z układów graficznych wbudowanych w CPU lub stworzenie konfiguracji AMD Crossfire. Aby Twój system pracował jeszcze sprawniej, zainstaluj go na dysku SSD umieszczonym w złączu M.2. Specjalna technologia OptiMem II usprawniająca przekazywanie sygnałów sprawia, że pamięć RAM pracuje ze zwiększoną stabilnością, a ty możesz korzystać taktowania modułów nawet 4266 MHz (O.C.).',
            'compatibility' => json_encode(['cpu'=>['socket'=>["1151"]], "ram"=>['type'=>['DDR4']], 'drive'=>['interface'=>['SATA']]]),
            'price' => 569,
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2018/10/pr_2018_10_5_10_11_28_406_00.jpg',
            'size' => "ATX"
        ]);
    }
}
