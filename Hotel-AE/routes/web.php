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

Route::get('/', 'HomeController@index')->name('home');
/* Route::get('/{locale}', 'HomeController@lang'); */


Route::get('/singleRoom', 'RoomsController@index')->name('lang.swap');
Route::get('/guia', 'BlogController@index')->name('guia');
Route::post('/', 'FormsController@store')->name('form');
Route::post('/singleRoom', 'FormsController@store')->name('form');
Route::post('/', 'FormsController@store')->name('form');
Route::post('/guia', 'FormsController@store')->name('form');
/* Route::get('/{lang}', 'LanguageController@swap')->name('lang.swap');
 */