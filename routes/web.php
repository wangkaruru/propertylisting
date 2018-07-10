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
Route::get('propertylist','FileController@find');
Route::get('about','FileController@about');
Route::get('naivashaplots','FileController@naivashaplots');
Route::get('ngongplots','FileController@ngongplots');
Route::get('submit','FileController@index');
Route::get('kitengelaplots','FileController@kitengelaplots');

Route::get('athiriverplots','FileController@athiriverplots');
Route::get('kamakisplots','FileController@kamakisplots');
Route::get('commercialplots','FileController@commercialplots');
Route::get('about','FileController@about');
Route::post('/contact','FileController@display');
Route::post('/submit','FileController@addlisting');
Route::get('contact','FileController@contact');

Route::resource('/dashboard','Admin\DashboardController');
