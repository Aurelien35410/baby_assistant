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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/newbottle', 'BottleController@addform')->name('newbottle');
Route::post('/newbottle', 'BottleController@add')->name('newbottle');

Route::get('/editbottle/{id}', 'BottleController@editform')->name('editbottle');
Route::post('/editbottle/{id}', 'BottleController@edit')->name('editbottle');

Route::get('/deletebottle/{id}', 'BottleController@delete')->name('deletebottle');

Route::get('/editprofil', 'ProfilController@editform')->name('editprofil');
Route::post('/editprofil/{id}', 'ProfilController@edit')->name('editprofil');

Route::get('/deleteprofil/{id}', 'ProfilController@delete')->name('deleteprofil');
