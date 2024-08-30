<?php

use Illuminate\Support\Facades\Route;


Route::get('/','App\Http\Controllers\MovieController@index');
Route::get('/page/{page}','App\Http\Controllers\MovieController@index');
Route::get('/{url}','App\Http\Controllers\MovieController@show');

Route::get('/genre/{tag}', 'App\Http\Controllers\MovieController@tag')->name('movies.tag');
Route::get('/genre/{tag}/{tag_2}', 'App\Http\Controllers\MovieController@tag')->name('movies.tag');
Route::get('/genre/{tag}/{tag_2}/{tag_3}', 'App\Http\Controllers\MovieController@tag')->name('movies.tag');
Route::get('/genre/{tag}/{tag_2}/{tag_3}/{tag_4}', 'App\Http\Controllers\MovieController@tag')->name('movies.tag');



Route::get('/test', function () {
    return view('welcome');
});
