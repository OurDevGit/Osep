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

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
Route::get('/dashboard','HomeController@dash')->name('dashboard');;
Route::get('/ins','HomeController@indins')->name('ins');

Route::get('/form2','FormController@display')->name('form2');
// Route::get('/form2','FormController@display1')->name('form2');
Route::post('/form2','FormController@store');

Route::get('/equipment','EquipmentController@display')->name('equipment');
Route::post('/equipment','EquipmentController@store');

Route::get('/lib','HomeController@lib')->name('lib');;

Route::get('/personel','PersonelController@display')->name('personel');
Route::post('/personel','PersonelController@store');


Route::get('/workplan','WorkPlanController@display')->name('workplan');;
Route::post('/workplan','WorkPlanController@store');

Route::get('/upload','HomeController@upload')->name('upload');;


Route::get('/home','HomeController@index')->name('home');












