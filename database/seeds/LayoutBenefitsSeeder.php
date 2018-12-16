<?php

use Illuminate\Database\Seeder;

class LayoutBenefitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'icon'=>'marker',
                'title'=>'Не надо никуда ехать',
                'text'=>'Оформление можно выполнить прямо на объекте сразу после замера',
                'ordering'=>1
            ],
            [
                'icon'=>'calendar',
                'title'=>'В срок от 7 дней',
                'text'=>'Минимальный срок от заключения договора до монтажа - неделя',
                'ordering'=>2
            ],
            [
                'icon'=>'warranty',
                'title'=>'Официальная гарантия',
                'text'=>'Сертифицированные материалы и монтаж по ГОСТу',
                'ordering'=>3
            ],
            [
                'icon'=>'agreement',
                'title'=>'Работа по договору',
                'text'=>'Письменное оформление наших обязательств и гарантий',
                'ordering'=>4
            ]
        ];

        DB::table('layout_benefits')->insert($data);
    }
}
