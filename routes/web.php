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



Route::get('/', 'CategoriesController@index');

Route::resource('categories', 'CategoriesController');

//Route::get('sasorich/create', 'EventsController@store');
//Route::get('sasorich/', 'EventsController@index');
Route::resource('events', 'EventsController');
Route::get('events.store', 'EventsController@createpage')->name('events.store');
Route::get('events.createpage', 'EventsController@createpage')->name('events.createpage');
Route::get('events.index', 'EventsController@index');