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

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Frontend' ], function (){

    Route::get('','HomeController@index');
    Route::get('/about','AboutController@index');
    Route::get('/blog','BlogController@index');
    Route::get('/contact','ContactController@index');
    Route::get('/services','ServicesController@index');
    Route::get('/single','SingleController@index');

    Route::any('wechat','WeChatController@serve');

});

