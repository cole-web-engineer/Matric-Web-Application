<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|

@SirCollinsEel - Code Cole Eel

| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PageController@index')->name('welcome');
Route::get('/', 'PageController@index')->name('home');
Route::get('/finish', 'PageController@finish')->name('paymentPage');
Route::get('/cancel', 'PageController@cancel')->name('cancel');
Route::get('/success', 'PageController@final')->name('success');

Route::post('/submit', 'ApplicantController@post')->name('submit');

/* admin and login routes down & below */

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('logs-app', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');