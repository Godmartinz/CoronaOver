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



Route::get('/',['as' => 'home','uses' => 'GuessEntriesController@index']);
Route::post('/guess/create',['as' => 'guess.store','uses' => 'GuessEntriesController@store']);
Route::get('/guess/{id}',['as' => 'guess.show','uses' => 'GuessEntriesController@show']);










