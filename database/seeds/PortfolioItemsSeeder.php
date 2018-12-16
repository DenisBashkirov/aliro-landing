<?php

use Illuminate\Database\Seeder;

class PortfolioItemsSeeder extends Seeder
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
                'title'=>'г. Краснодар. Остекление частного дома из профиля Rehau.',
            ],
            [
                'title'=>'г. Краснодар - ЖК «Легенда». Комплексное остекление жилых многоэтажных домов и офисов.',
            ],
            [
                'title'=>'Краснодарский край, ст. Марьянская. Остекление веранды из профиля Rehau.',
            ],
            [
                'title'=>'г. Краснодар. Остекление офиса из алюминиевого профиля.',
            ],
            [
                'title'=>'г. Краснодар - ЖК «Новый Город». Комплексное остекление жилых многоэтажных домов',
            ],
            [
                'title'=>'г. Краснодар - ТЦ "Центр Города". Алюминиевые фасадные системы.',
            ],
        ];

        foreach ($data as $i=>$arr)
        {
            $slug = str_slug($arr['title']);
            $data[$i]['slug'] = $slug;
        }

        DB::table('portfolio_items')->insert($data);
    }
}
