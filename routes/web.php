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

Route::get('/uservalidation', 'UservalidationController@index');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//project
Route::get('/createproject', 'ProjectController@index');
Route::post('/startproject', 'ProjectController@create');

//Tasks
Route::get('/createtask', 'TaskController@index');
Route::post('/createtask', 'TaskController@create');
