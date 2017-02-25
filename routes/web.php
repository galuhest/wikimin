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

Route::resource('candidate',"CandidateController");

Route::group(['prefix'=>'vision'], function() {
  Route::get('/{id}', 'VisionController@index');
  Route::get('/{id}/create', 'VisionController@create');
  Route::post('/', 'VisionController@store');
  Route::get('/{id}/edit', 'VisionController@edit');
  Route::put('/{id}', 'VisionController@update');
  Route::delete('/{id}', 'VisionController@delete');
});
