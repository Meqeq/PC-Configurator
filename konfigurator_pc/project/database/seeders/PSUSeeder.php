<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PSUSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('psu')->insert([
            'name' => 'SilentiumPC Vero L3 600W 80 Plus Bronze',
            'desc' => 'Zasilacz ATX Vero L3 600 W to bardzo wysoka sprawność, potwierdzona certyfikatem 80 PLUS Bronze 230V, nowoczesne i wydajne konwertery DC-DC, bardzo mocna pojedyncza linia +12 V, jak również bardzo ciche działanie w dużym zakresie obciążenia, a także bogaty zestaw płaskiego i czarnego okablowania. Wysokie parametry zasilaczy komputerowych Vero L3 to efekt użycia w ich budowie sprawdzonych komponentów wysokiej klasy, znanych dotychczas raczej z wyższych segmentów.',
            'price' => 239,
            'power' => 600,
            'producer' => 'SilentiumPC',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2020/4/pr_2020_4_14_15_32_15_807_05.jpg'
        ]);

        DB::table('psu')->insert([
            'name' => 'be quiet! Straight Power 11 750W 80 Plus Gold',
            'desc' => 'Zależy Ci na bezkompromisowej stabilności zasilania? Wybierz be quiet! Straight Power 11 750 W – zasilacz stworzony z myślą o zaawansowanych systemach, gdzie liczy się niezachwiana stabilność oraz superciche chłodzenie. Dzięki japońskim kondensatorom zasilacz odznacza się niezawodnością, a także wytrzymałością do 105°. Posiada również w pełni modularne zarządzanie przewodami, gwarantujące maksymalną elastyczność konfiguracji oraz cztery, wysokowydajne linie 12V. be quiet! Straight Power 11 750 W zapewnia ponadto wsparcie dla najmocniejszych GPU z dwoma złączami PCI-e.',
            'price' => 619,
            'power' => 750,
            'producer' => 'be quiet!',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2018/1/pr_2018_1_8_8_37_14_83_04.jpg'
        ]);
        DB::table('psu')->insert([
            'name' => 'SilentiumPC Elementum E2 450W 80 Plus (BULK)',
            'desc' => 'Zasilacz Elementum E2 SI 450W 80plus EU zaprojektowano z myślą o integratorach komputerów PC. Moc oraz okablowanie zostały dobrane tak, aby pozwolić na zbudowanie praktycznie dowolnego zestawu z pojedynczą kartą graficzną wymagającą złącza zasilania PCI-E 6 lub 8 pin..',
            'price' => 155,
            'power' => 450,
            'producer' => 'SilentiumPC',
            'img' => 'https://cdn.x-kom.pl/i/setup/images/prod/big/product-new-big,,2018/7/pr_2018_7_31_13_9_54_183_00.jpg'
        ]);
    }
}
