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

Route::get('/', 'HomeController@index');

Route::post('login', 'Admin\UserController@login');
Route::get('login', function () {
    return view('login');
})->name('login');
    Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
        Route::get('panel', function () {
            return view('admin.panel');
        });
        Route::resource('session', 'Admin\SessionController');
        Route::get('session/publish/{session}', 'Admin\SessionController@togglePublish');
        Route::get('session/unpublish/{session}', 'Admin\SessionController@togglePublish');

        Route::resource('event', 'Admin\EventController');

        Route::resource('photo', 'Admin\PhotoController');

        Route::resource('video', 'Admin\VideoController');

        Route::resource('sound', 'Admin\SoundController');

        Route::post('user/create', 'Admin\UserController@addUser');

        Route::resource('phone', 'Admin\PhoneController');
        Route::get('/phone/{phone}/active', 'Admin\PhoneController@active')->name('phone.active');

});

Route::get('heyat', 'SessionController@indexSessions')->name('heyat.index');
Route::get('heyat/{session}', 'SessionController@show')->name('heyat.show');;
Route::get('jahadi', 'SessionController@indexJahadi')->name('jahadi.index');;
Route::get('jahadi/{session}', 'SessionController@show')->name('jahadi.show');;
Route::post('phone', 'PhoneController@store');
