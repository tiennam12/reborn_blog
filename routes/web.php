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
Route::get('/users/{id}', 'UserController@show')->name('users.show');

Route::get('login/{provider}/callback','SocialController@callback');
Route::get('login/{provider}', 'SocialController@redirect');

Route::group(['prefix'=>'/tags'],function() {
    Route::get('/{tag}/edit', 'TagController@edit')->name('tags.edit');
    Route::get('/create', 'TagController@create')->name('tags.create');
    Route::get('/{tag}', 'TagController@show')->name('tags.show');
    Route::post('/{tag}', 'TagController@update')->name('tags.update');
    Route::delete('/{tag}', 'TagController@destroy')->name('tags.destroy');
    Route::get('/', 'TagController@index')->name('tags.index');
    Route::post('/', 'TagController@store')->name('tags.store');
});

Route::group(['prefix'=>'/posts'],function() {
    Route::get('/{post}/edit', 'PostController@edit')->name('posts.edit');
    Route::get('/create', 'PostController@create')->name('posts.create');
    Route::get('/{post}', 'PostController@show')->name('posts.show');
    Route::post('/{post}', 'PostController@update')->name('posts.update');
    Route::delete('/{post}', 'PostController@destroy')->name('posts.destroy');
    Route::get('/', 'PostController@index')->name('posts.index');
    Route::post('/', 'PostController@store')->name('posts.store');
});

Route::post('/ajax_upload/action', 'AjaxUploadController@action')->name('ajaxupload.action');
