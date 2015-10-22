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

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('posts', 'PostsController@index');

Route::get('posts/{id}', 'PostsController@show');
