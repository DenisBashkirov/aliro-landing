<?php

use Illuminate\Database\Seeder;

class LayoutAboutItemsSeeder extends Seeder
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
                'title'=>'Собственное производство',
                'ordering'=>1
            ],
            [
                'title'=>'На рынке с 2008 года',
                'ordering'=>2
            ],
            [
                'title'=>'Официальный партнёр Rehau',
                'ordering'=>3
            ]
        ];

        foreach ($data as $i=>$arr)
        {
            $slug = str_slug($arr['title']);

            $data[$i]['slug'] = $slug;
        }

        DB::table('layout_about_items')->insert($data);
    }
}
