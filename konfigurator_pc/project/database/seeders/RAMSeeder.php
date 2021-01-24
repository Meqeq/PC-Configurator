<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RAMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ram')->insert([
            'name' => 'G.SKILL 32GB (2x16GB) 3600MHz CL16 TridentZ RGB Neo',
            'desc' => 'Moduły pamięci RAM DDR4 G.SKILL Trident Z Neo zostały zaprojektowane i zoptymalizowane pod kątem pełnej kompatybilności z najnowszymi procesorami AMD Ryzen 3000 na płytach głównych z chipsetem AMD X570, Charakteryzujące się unikatowym designem i wyjątkowymi osiągami, moduły Neo dodadzą wnętrzu Twojej obudowy agresywnego charakteru, a przy tym zapewnią wydajność na potrzeby obsługi najbardziej wymagających aplikacji.',
            'price' => 1059,
            'capacity' => 32,
            'speed' => 3600,
            'type' => 'DDR4',
            'producer' => 'HyperX',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/9/pr_2019_9_19_11_11_26_260_02.jpg'
        ]);
        DB::table('ram')->insert([
            'name' => 'Corsair 16GB (2x8GB) 3200MHz CL16 Vengeance RGB Pro',
            'desc' => ' Przetaktowana pamięć Corsair Vengeance RGB Pro to najwyższa przepustowość i krótki czas reakcji. Zoptymalizowano je pod kątem maksymalnej wydajności na najnowszych płytach głównych obsługujących procesory Intel oraz AMD. Niestandardowa, wysokowydajna płytka drukowana zapewnia najwyższą jakość sygnału, wydajność i stabilność. Stylowe podświetlenie RGB poprawi estetykę Twojego komputera, jednocześnie zapewniając wyjątkowo łatwą instalację, nie wymagającą podłączania dodatkowych przewodów.',
            'price' => 509,
            'capacity' => 16,
            'speed' => 3200,
            'type' => 'DDR4',
            'producer' => 'Corsair',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2018/7/pr_2018_7_24_18_16_10_97_06.jpg'
        ]);

        DB::table('ram')->insert([
            'name' => 'G.SKILL 16GB (2x8GB) 3000MHz CL16 Aegis ',
            'desc' => 'G.SKILL AEGIS oferuje natychmiastowy wzrost wydajności i stabilności dla wszystkich systemów gier PC. Pamięci tej serii to jeden z najprostszych i najbardziej efektywnych kosztowo sposobów, aby uaktualnić swoje wrażenia w grach. Niezależnie czy jest to gra typu first-person shooter (FPS), strategia czasu rzeczywistego (RTS) czy nawet MMORPG, pamięci G.SKILL Aegis wyzwolą prawdziwą moc Twojego systemu gier bez względu na to w jakie gry grasz!',
            'price' => 329,
            'capacity' => 16,
            'speed' => 3000,
            'type' => 'DDR4',
            'producer' => 'G.SKILL',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2017/7/pr_2017_7_25_8_30_15_211.jpg'
        ]);

        DB::table('ram')->insert([
            'name' => 'Patriot 16GB (2x8GB) 3200MHz CL16 Viper 4',
            'desc' => ' Seria Viper to pamięci doskonale sprawdzające się przy podkręcaniu komputerów wyposażonych w procesory Intel Core. Pamięci Viper są wykonane z najwyższej jakości komponentów i poddane zostały dokładnym testom jakości oraz kompatybilności. Oferują taktowanie 3200MHz oraz opóźnienie na poziomie CL16. Aluminiowe radiatory, zaprojektowane specjalnie dla pamięci Viper, zapewniają utrzymanie niskich temperatur, a do tego świetnie prezentują się w obudowie gamingowego komputera. Gwarantują wydajną i stabilną pracę w każdych warunkach.',
            'price' => 349,
            'capacity' => 16,
            'speed' => 3200,
            'type' => 'DDR4',
            'producer' => 'Patriot',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/2/pr_2019_2_13_11_24_37_807_00.jpg'
        ]);

        DB::table('ram')->insert([
            'name' => 'HyperX 8GB (1x8GB) 2666MHz CL16 Fury ',
            'desc' => 'Zmodernizuj swój system dzięki ekonomicznej i wysokowydajnej pamięci RAM DDR4 HyperX FURY, oferującej taktowanie 2666 MHz oraz opóźnienia na poziomie CL16. Każdy moduł pamięci FURY DDR4 przechodzi testy przy pełnej szybkości i jest objęty wieczystą gwarancją. To bezproblemowa i przystępna cenowo modernizacja Twojego systemu.',
            'price' => 169,
            'capacity' => 8,
            'speed' => 3200,
            'type' => 'DDR4',
            'producer' => 'HyperX',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/8/pr_2019_8_14_10_28_45_513_00.jpg'
        ]);


    }
}
