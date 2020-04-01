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
Route::get('/','GuessEntriesController@index');
Route::get('/', function () {
$guessEntries =App\GuessEntries::latest()->get();
    return view('index', [
        'guessEntries' => $guessEntries

    ]);

});

Route::post('/', 'GuessEntriesController@create');





