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
    return view('layouts.app');
});

Route::group(['prefix' => 'templates'], function () {
    Route::get('{page}', function ($page) {
        return view('templates.' . $page)->render();
    });
});

Route::group(['prefix' => 'templates'], function () {
    Route::get('{folder}/{page}', function ($folder, $page) {
        return view('templates.' . $folder . '.' . $page)->render();
    });
});



Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin','namespace' => 'Admin'], function (){
    Auth::routes();
    Route::get('/', 'DashboardController@index');
    Route::get('profile', 'ProfileController@index');
    Route::post('profile', 'ProfileController@update');
    Route::resource('posts', 'PostsController',['except' => ['store','create']]);
});





