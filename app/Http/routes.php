<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route::get('/', [function () {
//   return view('welcome');]
// });

// Route::get('/article/create', ['uses' =>'ArticleController@create']);

// Route::post('/article/store', ['uses' => 'ArticleController@store']);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', ['uses' => 'ArticleController@index']);

    Route::get('/create', ['uses' =>'ArticleController@create']);

    Route::post('/store', ['uses' => 'ArticleController@store']);


});
