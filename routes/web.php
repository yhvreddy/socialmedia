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

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/uploadpost', 'HomeController@uploadPostData')->name('Upload.post');
    Route::get('/loadmore/load_data','LoadMoreController@load_data')->name('loadmore.load_data');
    Route::post('/loadmore/load_data','LoadMoreController@load_data')->name('loadmore.load_data');
});
