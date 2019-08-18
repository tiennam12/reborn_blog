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

Route::get('/', 'HomeController@index')->name('home')->middleware('language');

Route::get('/home', 'HomeController@index')->name('home')->middleware('language');

Route::get('language/{locale}', 'LanguageController@change')->name('language.change');

Route::get('/users/{id}', 'UserController@show')->name('users.show');

Route::get('login/{provider}/callback','SocialController@callback');
Route::get('login/{provider}', 'SocialController@redirect');

Route::group(['prefix' => 'users', 'middleware' => 'language'], function() {
	Route::get('/{id}', 'UserController@edit')->name('users.edit');
	Route::put('/{id}', 'UserController@update')->name('users.update');
});

Route::group(['prefix' => 'passwords', 'middleware' => 'language'], function() {
    Route::get('/{id}', 'PasswordController@edit')->name('passwords.edit');
    Route::put('/{id}', 'PasswordController@changePassword')->name('passwords.change');
});

Route::group(['prefix' => 'tags'], function() {
    Route::get('/{tag}/edit', 'TagController@edit')->name('tags.edit');
    Route::get('/create', 'TagController@create')->name('tags.create');
    Route::get('/{tag}', 'TagController@show')->name('tags.show');
    Route::post('/{tag}', 'TagController@update')->name('tags.update');    
    Route::get('/', 'TagController@index')->name('tags.index');
    Route::post('/', 'TagController@store')->name('tags.store');
});

Route::group(['prefix' => 'posts', 'middleware' => ['auth', 'language']], function() {
    Route::get('/{post}/edit', 'PostController@edit')->name('posts.edit');
    Route::get('/create', 'PostController@create')->name('posts.create');
    Route::get('/{post}', 'PostController@show')->name('posts.show');
    Route::post('/{post}', 'PostController@update')->name('posts.update');
    Route::get('/', 'PostController@index')->name('posts.index');
    Route::post('/', 'PostController@store')->name('posts.store');
});

Route::group(['prefix' => 'bookmarks', 'middleware' => 'auth', 'middleware' => 'language'], function() {
    Route::post('/', 'BookmarkController@store')->name('bookmarks.store');
    Route::get('/', 'BookmarkController@index')->name('bookmarks.index');
});

Route::group(['prefix' => 'comments', 'middleware' => 'auth'], function() {
    Route::post('/', 'CommentController@store')->name('comments.store');
});


Route::view('/fail', 'fail');

Route::group(['prefix' => 'authors', 'middleware' => 'auth'], function() {
    Route::get('/{id}', 'AuthorController@show')->name('authors.show');
});

Route::post('/ajax_upload/action', 'AjaxUploadController@action')->name('ajaxupload.action');

Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'admin']], function() {
    Route::get('/home', 'AdminController@index')->name('admin.home');

    Route::get('tags/{tag}/edit', 'TagController@edit')->name('tags.edit');
    Route::delete('/tags/{tag}', 'TagController@destroy')->name('tags.destroy');
    Route::get('/tags', 'TagController@index')->name('admin.tag');

    Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy');
    Route::get('/posts', 'PostController@index')->name('admin.post');
    Route::get('posts/{post}', 'PostController@admin_show')->name('posts.show');

    Route::get('/users', 'UserController@index')->name('admin.user');
});
