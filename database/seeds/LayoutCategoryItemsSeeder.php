<?php

use Illuminate\Database\Seeder;

class LayoutCategoryItemsSeeder extends Seeder
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
                'title'=>'Окна и двери',
                'ordering'=>1
            ],
            [
                'title'=>'Остелкение балконов и лоджий',
                'ordering'=>2
            ],
            [
                'title'=>'Фасады и светопрозрачные конструкции',
                'ordering'=>3
            ],
            [
                'title'=>'Нестандартные конструкции и раздвижные системы',
                'ordering'=>4
            ]
        ];

        foreach ($data as $i=>$arr)
        {
            $slug = str_slug($arr['title']);

            $data[$i]['slug'] = $slug;
        }

        DB::table('layout_category_items')->insert($data);
    }
}
