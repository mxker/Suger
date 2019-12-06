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
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::group(['namespace' => 'Frontend' ], function (){

    Route::get('','HomeController@index');
    Route::get('/about','AboutController@index');
    Route::get('/blog','BlogController@index');
    Route::get('/contact','ContactController@index');
    Route::get('/services','ServicesController@index');
    Route::get('/single','SingleController@index');

    Route::any('wechat','WeChatController@serve');
});

/** ****************Website Backend******************* */
Route::domain(env('ADMIN_DOMAIN'))->group(function (){
    Route::group(['namespace' => 'Admin'], function (){

        Route::get('/', 'LoginController@login');
        Route::post('backend/login/check', 'LoginController@checkLogin');
        Route::any('backend/register', 'LoginController@register');
        Route::get('backend/logout', 'LoginController@logout');
        Route::get('backend/code', 'LoginController@code');

        // session中间件验证
        Route::get('backend/home/{id}', 'HomeController@index')->middleware('session');

        Route::resource('backend/article', 'ArticleController');
        Route::resource('backend/category', 'CategoryController');
        Route::any('backend/category/changeOrder', 'CategoryController@changeOrder');
    });
});

