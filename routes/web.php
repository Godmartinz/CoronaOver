<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function(){
    return view('guess.guess');
});

Route::get('/guess','GuessEntriesController@index');
Route::post('/guess', 'GuessEntriesController@store');
Route::get('/guess/create', 'GuessEntriesController@create');
Route::get('/guess/show{id}', 'GuessEntriesController@show');













