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
    return view('welcome');
});

Auth::routes();
Route::get('/devis', 'ContratController@devis')->name('devis');
Route::get('/mesdevis', 'ContratController@mesdevis')->name('mesdevis');
Route::post('/devis', 'ContratController@nouveau')->name('devis');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home-admin', 'AdminController@index')->name('home-admin');
