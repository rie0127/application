<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
     public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
     protected $guarded = array('watched');
     
     protected $table = 'animes';
     
     protected $fillable =[
          'title',
          'category_id',
          'date',
          'evaluation',
          'feeling',
          'updated_at',
          'created_at'
     ];
    
}
