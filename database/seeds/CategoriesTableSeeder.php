<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $categories=[
                  ['id'=>1,
                   'name'=>'SF/ファンタジー'],
                  ['id'=>2,
                   'name'=>'ロボット/メカ'],
                  ['id'=>3,
                   'name'=>'アクションバトル'],
                  ['id'=>4,
                   'name'=>'コメディ/ギャグ'],
                  ['id'=>5,
                   'name'=>'恋愛/ラブコメ'],
                  ['id'=>6,
                   'name'=>'日常/ほのぼの'],
                  ['id'=>7,
                   'name'=>'スポーツ'],
                  ['id'=>8,
                   'name'=>'ホラー/サスペンス/推理'],
                  ['id'=>9,
                   'name'=>'歴史/戦記'],
                  ['id'=>10,
                   'name'=>'青春']
                  ];
      
     foreach($categories as $category){
         \App\Category::create($category);
     }
   }
}
