<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Routs to implement:
///api/getall
///api/delete/id/" + id
//"/api/create/"+name+"/"


Route::get('/', function () {return view('welcome');});
Route::get('/api/getall', ['uses' => 'TasksController@getAll']);
Route::get('/api/delete/id/{id}', ['uses' => 'TasksController@DeleteID']);
Route::POST('/api/create/', ['uses' => 'TasksController@CreateTask']);


//Route::post('/api/create/', ['uses' => 'TasksController@CreateTask']);


