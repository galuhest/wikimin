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

Route::get('/', 'CandidateController@welcome');

Route::get('/admin', function(){
  return view('admin');
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
  Route::get('/{id}/kontribusi-data', 'CandidateController@submit');
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

Route::group(['prefix'=>'education'], function() {
  Route::get('/{id}/kontribusi-data', 'CandidateController@submit');
  Route::get('/{id}', 'EducationController@index');
  Route::get('/{id}/create', 'EducationController@create');
  Route::post('/', 'EducationController@store');
  Route::get('/{id}/edit', 'EducationController@edit');
  Route::put('/{id}', 'EducationController@update');
  Route::delete('/{id}', 'EducationController@delete');
});

Route::group(['prefix'=>'testimony'], function() {
  Route::get('/{id}/kontribusi-data', 'CandidateController@submit');
  Route::get('/{id}', 'TestimonyController@index');
  Route::get('/{id}/create', 'TestimonyController@create');
  Route::post('/', 'TestimonyController@store');
  Route::get('/{id}/edit', 'TestimonyController@edit');
  Route::put('/{id}', 'TestimonyController@update');
  Route::delete('/{id}', 'TestimonyController@delete');
});

Route::group(['prefix'=>'career'], function() {
  Route::get('/{id}/kontribusi-data', 'CandidateController@submit');
  Route::get('/{id}', 'CareerController@index');
  Route::get('/{id}/create', 'CareerController@create');
  Route::post('/', 'CareerController@store');
  Route::get('/{id}/edit', 'CareerController@edit');
  Route::put('/{id}', 'CareerController@update');
  Route::delete('/{id}', 'CareerController@delete');
});

Route::group(['prefix'=>'issue'], function() {
  Route::get('/{id}/kontribusi-data', 'CandidateController@submit');
  Route::get('/{id}', 'IssueController@index');
  Route::get('/{id}/create', 'IssueController@create');
  Route::post('/', 'IssueController@store');
  Route::get('/{id}/edit', 'IssueController@edit');
  Route::put('/{id}', 'IssueController@update');
  Route::delete('/{id}', 'IssueController@delete');
});

Route::group(['prefix'=>'award'], function() {
  Route::get('/{id}/kontribusi-data', 'CandidateController@submit');
  Route::get('/{id}', 'AwardController@index');
  Route::get('/{id}/create', 'AwardController@create');
  Route::post('/', 'AwardController@store');
  Route::get('/{id}/edit', 'AwardController@edit');
  Route::put('/{id}', 'AwardController@update');
  Route::delete('/{id}', 'AwardController@delete');
});

Route::group(['prefix'=>'topic'], function() {
  Route::get('/', 'TopicController@index');
  Route::get('/create', 'TopicController@create');
  Route::post('/', 'TopicController@store');
  Route::delete('/{id}', 'TopicController@delete');
});
