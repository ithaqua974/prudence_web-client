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



Auth::routes();
Route::get('/devis', 'ContratController@devis')->name('devis');
Route::get('/mesdevis', 'ContratController@mesdevis')->name('mesdevis');
Route::post('/devis', 'ContratController@nouveau')->name('devis');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home-admin', 'AdminController@index')->name('home-admin');

Route::group(['prefix' => '/admin'], function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin');
    Route::get('/clients', 'Admin\ClientController@index')->name('admin');
    Route::get('/roles', 'Admin\AdminController@listRoles')->name('admin');
    Route::get('/types', 'Admin\AdminController@listTypes')->name('admin');
    Route::get('/clients/detail/{id}', 'Admin\ClientController@edit')->name('admin');
});
