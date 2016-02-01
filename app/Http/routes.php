<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function (){
	return view('login', ['title' => 'login']);
});

Route::get('reg', function (){
	return view('reg', ['title' => 'sign up']);
});

Route::post('reg', 'UserController@signUp');
// Route::get('/test', ['as' => 'test.route', function (){
// 	return 'this is a test';
// }]);

// Route::get('/test-link', function (){
// 	return route('test.route');
// });

// Route::get('user/{name?}', function ($name = 'John') {
//     return $name;
// });

// Route::get('test', function(){
// 	return view('test', ['name' => 'akira']);
// });

// Route::get('user/{id}', 'UserController@showId');

// Route::get('test/{name?}', 'UserController@sayHello');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
