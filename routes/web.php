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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', function()
{
  return view('inicio');
});

Route::get('/trabajos','TrabajosController@getindex');
Route::get('/trabajos/show/{id}','TrabajosController@getShow');
Route::get('/trabajos/crear','TrabajosController@getCreate')->middleware('auth');
Route::get('/trabajos/edit/{id}','TrabajosController@getEdit')->middleware('auth');


Route::post('/trabajos/crear','TrabajosController@postCreate')->middleware('auth');
Route::put('/trabajos/edit/{id}', 'TrabajosController@putEdit')->middleware('auth');
Route::delete('trabajos/delete/{id}', 'TrabajosController@deleteDelete')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

//});
