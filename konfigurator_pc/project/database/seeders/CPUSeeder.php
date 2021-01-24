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
            'desc' => 'Poznaj moc do dziesiątej potęgi. Nowy procesor Intel® Core™ i5-10400F z rodziny Comet Lake zapewnia wysoką wydajność, która przekłada się na wzrost produktywności i fantastyczną rozrywkę. Intel Core i5 10-generacji oferuje m.in. częstotliwość dochodzącą do 4.3 GHz w trybie turbo, 6 rdzeni, 12 wątków, a także inteligentną optymalizację systemu. Odkryj nowe ultramożliwości z procesorem Intel® Core™ i5-10400F.',
            'frequency' => 2900,
            'cores' => 4,
            'price' => 699,
            'socket' => '1200',
            'producer' => 'Intel',
            'img' => "https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/5/pr_2020_5_6_15_54_11_386_00.jpg"
        ]);

        DB::table('cpu')->insert([
            'name' => 'AMD Ryzen 5 3600',
            'desc' => 'Procesor AMD Ryzen 5 3600 korzysta z nowatorskiej architektury Zen 2. To dzięki niej CPU osiąga znakomite wyniki w grach i podczas obsługi profesjonalnych aplikacji, utrzymując stale wysoką wydajność. Jednostka posiada 6 rdzeni i 12 wątków, a pamięć cache liczy 35 MB. Rdzenie taktowane są zegarami bazowymi 3,60 GHz, które wzrasta w trybie Turbo do 4,20 GHz i dostarcza jeszcze więcej mocy do pracy oraz rozrywki.',
            'frequency' => 3600,
            'cores' => 6,
            'price' => 949,
            'socket' => 'AM4',
            'producer' => 'AMD',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/7/pr_2019_7_19_9_27_42_99_00.jpg'
        ]);

        DB::table('cpu')->insert([
            'name' => 'Intel Core i5-9400F',
            'desc' => 'Intel Core i5-9400F to zaawansowany procesor 9-tej generacji pozbawiony zintegrowanego układu graficznego. CPU posiada 6 rdzeni, 6 wątków, 9MB pamięci SmartCache oraz częstotliwość bazową 2.90GHz, którą można zwiększyć do 4.10GHz w trybie Turbo. Poczuj moc 9. generacji procesorów Intel Core.',
            'frequency' => 2900,
            'cores' => 6,
            'price' => 559,
            'socket' => '1151',
            'producer' => 'Intel',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/7/pr_2019_7_18_12_17_33_694_00.jpg'
        ]);

        DB::table('cpu')->insert([
            'name' => 'Intel Core i3-10100F',
            'desc' => 'Poznaj moc do dziesiątej potęgi. Nowy procesor Intel® Core™ i3-10100F z rodziny Comet Lake zapewnia wysoką wydajność, która przekłada się na wzrost produktywności i fantastyczną rozrywkę. Intel Core i3 10-generacji oferuje m.in. częstotliwość dochodzącą do 4.3 GHz w trybie turbo, 4 rdzenie, 8 wątków, a także inteligentną optymalizację systemu. Odkryj nowe ultramożliwości z procesorem Intel® Core™ i3-10100F.',
            'frequency' => 3600,
            'cores' => 4,
            'price' => 399,
            'socket' => '1200',
            'producer' => 'Intel',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/5/pr_2020_5_6_16_8_32_905_00.jpg'
        ]);

        DB::table('cpu')->insert([
            'name' => 'AMD Ryzen 5 3500X',
            'desc' => 'Jednostka AMD Ryzen 5 3500X posiada 6 rdzeni i 6 wątków, gotowych do pracy przy maksymalnym obciążeniu w grach i specjalistycznych aplikacjach. Pamięć cache tego procesora liczy łącznie 35 MB. Bazowe taktowanie rdzeni otwiera częstotliwość 3,60 GHz, sięgając 4,10 GHz w trybie Turbo. Moc jednostki może jednak wzrosnąć dzięki odblokowanemu mnożnikowi. Czas na ogromną moc wspartą przez nowatorską architekturę Zen 2.',
            'frequency' => 3600,
            'cores' => 6,
            'price' => 769,
            'socket' => 'AM4',
            'producer' => 'AMD',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2019/7/pr_2019_7_19_9_49_52_151_00.jpg'
        ]);

        DB::table('cpu')->insert([
            'name' => 'AMD Ryzen 5 2600X',
            'desc' => ' Procesor AMD Ryzen 5 2600X 2. generacji bazuje na unowocześnionej mikroarchitekturze Zen+, posiadając 6 rdzeni, 12 wątków i 19 MB pamięci cache. Bazowe taktowanie zegarów liczy 3.6 GHz, wzrastając do 4.2 GHz w trybie Turbo. Mało tego, odblokowany mnożnik daje możliwość zwiększenia mocy, poprzez podkręcenie częstotliwości taktowania zegarów CPU. Osiągaj więcej z Ryzen 5 2600X. Wydajność procesora napędza gaming i stanowi gwarancję płynnej pracy z zaawansowanymi aplikacjami. Gdy będzie to potrzebne, przyspieszenie Precision Boost automatycznie zwiększy taktowanie rdzeni do maksimum, uwalniając pełen potencjał CPU.',
            'frequency' => 3600,
            'cores' => 6,
            'price' => 749,
            'socket' => 'AM4',
            'producer' => 'AMD',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2018/4/pr_2018_4_10_12_42_35_199_01.jpg'
        ]);

        DB::table('cpu')->insert([
            'name' => 'AMD Ryzen 7 5800X',
            'desc' => 'Jednostka AMD Ryzen 7 5800X posiada 8 rdzeni i 16 wątków, gotowych do pracy przy maksymalnym obciążeniu w grach i specjalistycznych aplikacjach. Pamięć cache tego procesora liczy łącznie 36 MB, a bazowe taktowanie rdzeni otwiera częstotliwość 3,80 GHz, mogąca sięgać aż do 4,70 GHz w trybie Turbo. Moc jednostki może jednak wzrosnąć dzięki odblokowanej możliwości podkręcania. Czas na ogromną moc wspartą przez nowatorską architekturę Zen 3.',
            'frequency' => 3800,
            'cores' => 8,
            'price' => 2149,
            'socket' => 'AM4',
            'producer' => 'AMD',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/10/pr_2020_10_9_13_47_7_306_00.jpg'
        ]);

        DB::table('cpu')->insert([
            'name' => 'Intel Core i7-10700K',
            'desc' => 'Poznaj moc do dziesiątej potęgi. Nowy, odblokowany procesor Intel® Core™ i7-10700K z rodziny Comet Lake zapewnia znacznie wyższą wydajność, która przekłada się na wzrost produktywności i fantastyczną rozrywkę. Intel Core i7 10-generacji oferuje m.in. częstotliwość dochodzącą do 5.1 GHz w trybie turbo, 8 rdzeni, 16 wątków, a także inteligentną optymalizację systemu. Wbudowane inteligentne funkcje wydajności uczą się i przystosowują do nawyków użytkownika oraz dynamicznie kierują moc, tam gdzie jest najbardziej potrzebna. Odkryj nowe ultramożliwości z procesorem Intel® Core™ i7-10700K.',
            'frequency' => 3800,
            'cores' => 8,
            'price' => 1649,
            'socket' => '1200',
            'producer' => 'Intel',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/5/pr_2020_5_6_15_10_34_543_00.jpg'
        ]);

        DB::table('cpu')->insert([
            'name' => 'Intel Core i9-10900K',
            'desc' => 'Poznaj moc do dziesiątej potęgi. Nowy, odblokowany procesor Intel® Core™ i9-10900K z rodziny Comet Lake zapewnia znacznie wyższą wydajność, która przekłada się na wzrost produktywności i fantastyczną rozrywkę. Intel Core i9 10-generacji oferuje m.in. częstotliwość dochodzącą do 5.3 GHz w trybie turbo, 10 rdzeni, 20 wątków, a także inteligentną optymalizację systemu. Wbudowane inteligentne funkcje wydajności uczą się i przystosowują do nawyków użytkownika oraz dynamicznie kierują moc, tam gdzie jest najbardziej potrzebna. Odkryj nowe ultramożliwości z procesorem Intel® Core™ i9-10900K.',
            'frequency' => 3700,
            'cores' => 10,
            'price' => 2299,
            'socket' => '1200',
            'producer' => 'Intel',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/5/pr_2020_5_6_14_49_13_604_01.jpg'
        ]);

        DB::table('cpu')->insert([
            'name' => 'AMD Ryzen 9 5950X',
            'desc' => 'Jednostka AMD Ryzen 9 5950X posiada 16 rdzeni i 32 wątki, gotowych do pracy przy maksymalnym obciążeniu w grach i specjalistycznych aplikacjach. Pamięć cache tego procesora liczy łącznie 72 MB, a bazowe taktowanie rdzeni otwiera częstotliwość 3,40 GHz, mogąca sięgać aż do 4,90 GHz w trybie Turbo. Moc jednostki może jednak wzrosnąć dzięki odblokowanej możliwości podkręcania. Czas na ogromną moc wspartą przez nowatorską architekturę Zen 3.',
            'frequency' => 3400,
            'cores' => 16,
            'price' => 4399,
            'socket' => 'AM4',
            'producer' => 'AMD',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/10/pr_2020_10_9_14_6_57_190_00.jpg'
        ]);
    }
}
