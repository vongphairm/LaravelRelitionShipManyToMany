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
Auth::routes();

Route::get('/teacher','PageController@teacher');
Route::get('/student','PageController@student');
Route::get('/room','PageController@room');
Route::get('/post','PageController@showPost');
Route::get('/create','PageController@create');
Route::get('/store','PageController@store');
Route::get('/edit/{id}','PageController@edit');
Route::patch('/update/{id}','PageController@update');
Route::delete('/delete/{id}','PageController@delete');


Route::get('/', function () {
    return view('welcome');
});


//Route::get('/home', 'HomeController@index')->name('home');
