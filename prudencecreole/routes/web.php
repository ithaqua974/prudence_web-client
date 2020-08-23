<?php

use Illuminate\Support\Facades\Auth;
use illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/detail/{type}', 'HomeController@show')->name('détail');
Route::get('/devis/{id}', 'ContratController@devis')->name('devis');
Route::get('/mesdevis', 'ContratController@mesdevis')->name('mesdevis');
Route::post('/devis/{id}', 'ContratController@nouveau')->name('devis');
// Route::get('/', 'HomeController@index')->name('home');


Route::group(['prefix' => '/admin'], function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin');
    /**
     * Clients
     */
    Route::get('/clients', 'Admin\ClientController@index')->name('admin_clients@index');
    Route::get('/clients/detail/{id}', 'Admin\ClientController@edit')->name('admin_clients@detail');

    /**
     * Roles
     */
    Route::get('/roles', 'Admin\RoleController@index')->name('admin_roles@index');
    Route::get('/roles/create', 'Admin\RoleController@create')->name('admin_roles@create');
    Route::post('/roles/store', 'Admin\RoleController@store')->name('admin_roles@store');
    Route::get('/roles/show/{id}', 'Admin\RoleController@show')->name('admin_roles@show');
    Route::get('/roles/edit/{id}', 'Admin\RoleController@edit')->name('admin_roles@edit');
    Route::post('/roles/update/{id}', 'Admin\RoleController@update')->name('admin_roles@update');
    Route::post('/roles/destroy/{id}', 'Admin\RoleController@destroy')->name('admin_roles@destroy');

    /**
     * Types
     */
    Route::get('/types', 'Admin\AdminController@listTypes')->name('admin');
});
