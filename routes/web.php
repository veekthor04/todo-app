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
    return view('index');
});

//Route::resource('/todos','TodosController');

Route::resource('/api/todos', 'TodosApiController', ['as'=>'api']);

Route::group(['middleware'=>'web'], function (){
    Route::resource('/todos', 'TodosController');
});

Route::get('/todos/{id}/delete', "TodosController@destroy");