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
    return view('user.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'/tags'],function() {
    Route::get('/{tag}/edit', 'TagController@edit')->name('tags.edit');
    Route::get('/create', 'TagController@create')->name('tags.create');
    Route::get('/{tag}', 'TagController@show')->name('tags.show');
    Route::post('/{tag}', 'TagController@update')->name('tags.update');
    Route::delete('/{tag}', 'TagController@destroy')->name('tags.destroy');
    Route::get('/', 'TagController@index')->name('tags.index');
    Route::post('/', 'TagController@store')->name('tags.store');
});
