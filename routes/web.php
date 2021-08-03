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
Route::get('/animes','AnimeController@index_watched')->name('index.watched');
Route::get('/animes/create','AnimeController@create_watched')->name('create.watched');

Route::post('/animes/store','AnimeController@store_watched')->name('store.watched');
Route::post('/animes/store/unwatch','AnimeController@store_unwatch')->name('store.unwatch');




Route::get('/animes/unwatch','AnimeController@index_unwatch')->name('index.unwatch');

Route::put('/animes/update/unwatch/{anime}','AnimeController@update_unwatch')->name('update.unwatch');
Route::get('/animes/create/unwatch','AnimeController@create_unwatch')->name('create.unwatch');
Route::get('/animes/edit/unwatch/{id}','AnimeController@edit_unwatch')->name('edit.unwatch');
Route::post('/animes/delete/unwatch/{id}','AnimeController@delete_unwatch')->name('delete.unwatch');

Route::put('/animes/update/{anime}','AnimeController@update_watched')->name('update.watched');

Route::get('/animes/edit/{id}','AnimeController@edit_watched')->name('edit.watched');
Route::post('/animes/delete/{id}','AnimeController@delete_watched')->name('delete.watched');

Route::get('/animes/unwatch/{id}','AnimeController@show_unwatch');
Route::get('/animes/{id}','AnimeController@show_watched');

