<?php

use Illuminate\Database\Seeder;

class AnimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animes')->truncate();
        
        $animes=[
                ['title'=>'あ',
                 'category_id'=>1,
                 'date'=>'2021-06-01',
                 'evaluation'=>3,
                 'feeling'=>'面白かった。',
                 'watched'=>1],
                 ['title'=>'い',
                  'category_id'=>2,
                  'date'=>'2021-06-02',
                  'evaluation'=>4,
                  'feeling'=>'感動した。',
                  'watched'=>1],
                 ['title'=>'う',
                  'category_id'=>3,
                  'date'=>'2021-06-03',
                  'evaluation'=>0,
                  'feeling'=>'楽しみ。',
                  'watched'=>0 ]
                ];
        
        foreach($animes as $anime){
             \App\Anime::create($anime);
        }

    }
}
