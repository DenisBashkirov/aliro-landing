<?php

use Illuminate\Database\Seeder;

class LayoutCreditItemsSeeder extends Seeder
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
                'title'=>'3 месяца',
                'text'=>'минимальный срок',
                'ordering'=>1
            ],
            [
                'title'=>'0%',
                'text'=>'Переплата',
                'ordering'=>2
            ],
            [
                'title'=>'36 месяцев',
                'text'=>'максимальный срок',
                'ordering'=>3
            ]
        ];

        DB::table('layout_credit_items')->insert($data);
    }
}
