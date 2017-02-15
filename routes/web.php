<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Frond End Routes

Route::get('/', [
	'uses' => 'FrontController@index',
	'as' => 'front.index'
]);

Route::get('categories/{name}', [
	'uses' => 'FrontController@searchCategory',
	'as' => 'front.search.category'
]);

Route::get('tags/{name}', [
	'uses' => 'FrontController@searchTag',
	'as' => 'front.search.tag'
]);

Route::get('articles/{slug}', [
	'uses' => 'FrontController@viewArticle',
	'as' => 'front.view.article'
]);

// Admin Routes

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
	
	Route::get('/', ['as' => 'admin.index', function() {
		return view('admin.index');
	}]);

	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy', [
		'uses' => 'UsersController@destroy',
		'as' => 'admin.users.destroy'
	]);

	Route::resource('categories', 'CategoriesController');
	Route::get('categories/{id}/destroy', [
		'uses' => 'CategoriesController@destroy',
		'as' => 'admin.categories.destroy'
	]);

	Route::resource('tags', 'TagsController');
	Route::get('tags/{id}/destroy', [
		'uses' => 'TagsController@destroy',
		'as' => 'admin.tags.destroy'
	]);

	Route::resource('articles', 'ArticlesController');
	Route::get('articles/{id}/destroy', [
		'uses' => 'ArticlesController@destroy',
		'as' => 'admin.articles.destroy'
	]);

	Route::get('images', [
		'uses' => 'ImagesController@index',
		'as' => 'admin.images.index'
	]);

});

Auth::routes();
