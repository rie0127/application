<?php

namespace App\Http\Controllers;

use App\Anime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\WatchedRequest;
use App\Http\Requests\UnwatchRequest;

class AnimeController extends Controller
{
    public function show_top()
    {
      return view('top');
    }
    
    public function index_watched()
    {
      $watchedanimes = DB::table('animes')->where('watched','=','1')->get();
      
      return view('Watched.index',['watchedanimes' => $watchedanimes]);
       
    }
    
    public function index_unwatch()
    {
      $unwatchanimes = DB::table('animes')->where('watched','=','0')->get();
      
      return view('Unwatch.index',['unwatchanimes'=> $unwatchanimes]);
    }
    
    
    public function show_watched($id)
    {
      $watchedanime= Anime::find($id);
       
      return view('Watched.show',['watchedanime'=>$watchedanime]);
        
    }
    
     public function show_unwatch($id)
    {
       $unwatchanime= Anime::find($id);
       
       return view('Unwatch.show',['unwatchanime'=> $unwatchanime]);
        
    }
    
    public function create_watched()
    {
      return view('Watched.store');
    }
    
    public function create_unwatch()
    {
      return view('Unwatch.store');
    }
    
    //登録する
    public function store_watched(WatchedRequest $request, Anime $anime)
    {
      $input = $request['anime'];
      $anime->fill($input);
      $anime->watched=1;
      $anime->save();
      return redirect(route('index.watched'));
    }
    
    public function store_unwatch(UnwatchedRequest $request, Anime $anime)
    {
      $input = $request['anime'];
      $anime->fill($input);
      $anime->watched=0;
      $anime->save();
      return redirect(route('index.unwatch'));
    }
    
    public function edit_watched($id)
    {
      $watchedanime= Anime::find($id);
      return view('Watched.edit',['watchedanime'=>$watchedanime]);
    }
    
     public function edit_unwatch($id)
    {
      $unwatchanime= Anime::find($id);
      return view('Unwatch.edit',['unwatchanime'=>$unwatchanime]);
    }
    
     public function update_watched(WatchedRequest $request, Anime $anime)
    {
      $input_anime = $request['anime'];
      $anime->fill($input_anime);
      $anime->watched=1;
      $anime->save();
      return redirect(route('index.watched'));
    }
    
     public function update_unwatch(UnwatchRequest $request, Anime $anime)
    {
      $input_anime = $request['anime'];
      $anime->fill($input_anime);
      $anime->watched=0;
      $anime->save();
      return redirect(route('index.unwatch'));
    }
    
    public function delete_watched($id)
    {
      $watchedanime= Anime::destroy($id);
      return redirect(route('index.watched'));
    }
    
     public function delete_unwatch($id)
    {
      $unwatchanime= Anime::destroy($id);
      return redirect(route('index.unwatch'));
    }
}
