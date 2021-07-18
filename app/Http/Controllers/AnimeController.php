<?php

namespace App\Http\Controllers;

use App\Anime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\AnimeRequest;

class AnimeController extends Controller
{
    public function show_top()
    {
      return view('top');
    }
    
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
       
      return view('detail_watched',['watchedanime'=>$watchedanime]);
        
    }
    
     public function show_detail_unwatch($id)
    {
       $unwatchanime= Anime::find($id);
       
       return view('detail_unwatch',['unwatchanime'=> $unwatchanime]);
        
    }
    
    public function show_create_watched()
    {
      return view('record_watched');
    }
    
    public function show_create_unwatch()
    {
      return view('record_unwatch');
    }
    
    //登録する
    public function exe_store_watched(AnimeRequest $request, Anime $anime)
    {
      $input = $request['post'];
      $anime->fill($input)->save();
      return redurect(route('list_watch'));
    }
    
    public function exe_store_unwatch(AnimeRequest $request, Anime $anime)
    {
      $input = $request['post'];
      $anime->fill($input)->save();
      return redirect(route('list_unwatch'));
    }
}
