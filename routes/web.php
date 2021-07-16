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

Route::get('/', function () {
    return view('detail_watched');
});

Route::get('/watched','AnimeController@show_list_watched');
Route::get('/unwatch','AnimeController@show_list_unwatch');

Route::get('/watched/{id}','AnimeController@show_detail_watched');
Route::get('/unwatch/{id}','AnimeController@show_detail_unwatch');

