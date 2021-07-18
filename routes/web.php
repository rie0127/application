<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//ホーム画面表示
Route::get('/','AnimeController@show_top')->name('home');

//登録画面表示
Route::get('/animes/create','AnimeController@show_create_watched')->name('create_watched');
Route::get('/animes/create/unwatch','AnimeController@show_create_unwatch')->name('create_unwatch');


//実際の登録
Route::post('/animes/store','AnimeController@exe_store_watched')->name('store_watched');
Route::post('/animes/store/unwatch','AnimeController@exe_store_unwatch')->name('store_unwatch');


//一覧画面の表示
Route::get('/animes','AnimeController@show_list_watched')->name('list_watched');
Route::get('/animes/unwatch','AnimeController@show_list_unwatch')->name('list_unwatch');

//詳細画面の表示
Route::get('/animes/{id}','AnimeController@show_detail_watched');
Route::get('/animes/unwatch/{id}','AnimeController@show_detail_unwatch');

