<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'PostsController@index');



Route::get('/foo', function () {
    return 'bar';
});

Route::group(['prefix'=>'guest'], function() {
	Route::get('/hello/{name}', function($name) {
		return "Hello $name!";
	});
});

Route::get('/marhaban/{name}', function ($name) {
    return "Hello $name!";
});

Route::get('/marhaban/{name?}', [
	'as'=>'welcome.guest',
 function ($name='Guest') {
    return "welcome $name to Mataano Villa";
}
]);

Route::get('/about', function () {
    return view('about');
});

Route::post('login-submit', function() {
	//return"Login success!";
	$result = "Username: " . Request::get('username');
	$result .= " | Password: " . Request::get('password');
	return $result;


});

Route::resource('posts', 'PostsController');
Route::resource('categories', 'CategoriesController');
Route::get('home', 'PostsController@index');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


