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

Route::group(['prefix'=>'program'], function() {
  Route::get('/{id}', 'ProgramController@index');
  Route::get('/{id}/create', 'ProgramController@create');
  Route::post('/', 'ProgramController@store');
  Route::get('/{id}/edit', 'ProgramController@edit');
  Route::put('/{id}', 'ProgramController@update');
  Route::delete('/{id}', 'ProgramController@delete');
});

Route::group(['prefix'=>'mission'], function() {
  Route::get('/{id}', 'MissionController@index');
  Route::get('/{id}/create', 'MissionController@create');
  Route::post('/', 'MissionController@store');
  Route::get('/{id}/edit', 'MissionController@edit');
  Route::put('/{id}', 'MissionController@update');
  Route::delete('/{id}', 'MissionController@delete');
});
