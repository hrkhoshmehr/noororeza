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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('session', 'SessionController');
Route::resource('event', 'EventController');
Route::resource('photo', 'photoController');
Route::resource('video', 'VideoController');
Route::resource('sound', 'SoundController');
Route::get('/sessionss', 'SessionController@indexSessions');
Route::get('jahadi', 'SessionController@indexJahadi');
Route::get('jahadi/{session}', 'SessionController@showjahadi');
