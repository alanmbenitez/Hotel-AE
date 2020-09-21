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


Route::get('/rooms/single', 'RoomsController@single')->name('lang.swap');
Route::get('/rooms/double', 'RoomsController@double')->name('lang.swap');
Route::get('/rooms/triple', 'RoomsController@triple')->name('lang.swap');
Route::get('/rooms/cuadruple', 'RoomsController@cuadruple')->name('lang.swap');

Route::get('/tourism', 'BlogController@index')->name('tourism');
Route::get('/contact', 'HomeController@contacto')->name('contacto');

Route::post('/', 'FormsController@store')->name('form');
Route::post('/', 'FormsController@contact')->name('form2');

/* Route::post('/singleRoom', 'FormsController@store')->name('form'); */
/* Route::post('/', 'FormsController@store')->name('form'); */
Route::post('/tourism', 'FormsController@store')->name('form');
/* Route::get('/{lang}', 'LanguageController@swap')->name('lang.swap');
 */