<?php

use Illuminate\Database\Seeder;

class OrderTypesSeeder extends Seeder
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
                'name'=>'Заявка на бесплатный замер',
                'slug'=>'free_measuring'
            ]
        ];

        DB::table('order_types')->insert($data);
    }
}
