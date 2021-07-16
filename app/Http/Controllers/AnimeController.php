<?php

namespace App\Http\Controllers;

use App\Anime;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AnimeController extends Controller
{
    public function show_list_watched()
    {
      $watchedanimes = DB::table('animes')->where('watched','=','1')->get();
      
      return view('list_watched',['watchedanimes' => $watchedanimes]);
       
    }
    
    public function show_list_unwatch()
    {
      $unwatchanimes = DB::table('animes')->where('watched','=','0')->get();
      
      return view('list_unwatch',['unwatchanimes'=> $unwatchanimes]);
    }
    
    public function show_detail_watched($id)
    {
       $watchedanime= Anime::find($id);
       
       return view('detail_watched',['watchedanime'=> $watchedanime]);
        
    }
    
     public function show_detail_unwatch($id)
    {
       $unwatchanime= Anime::find($id);
       
       return view('detail_unwatch',['unwatchanime'=> $unwatchanime]);
        
    }
}
