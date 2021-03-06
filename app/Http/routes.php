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

// Route::get('/', function () {
//     return view('welcome');
// });

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
    Route::resource('apply', 'ApplyController', ['except' => [ 'edit', 'create']]);
	Route::get('admin/edit/{id}', 'AdminController@edit');
});

	Route::get('admin', 'AdminController@index');
	Route::get('admin/details/{id}', 'AdminController@show');

//Route::resource('admin', 'ApplicantsController',
//	['except' => ['create', 'store', 'update', 'edit']]);

// Route::get('apply', 'ApplicantsController@apply');
// Route::post('apply', 'ApplicantsController@store');
// Route::get('apply/thankyou', 'ApplicantsController@thankyou');
// Route::get('admin', 'ApplicantsController@index');
// Route::get('admin/show/{id}', 'ApplicantsController@show');
// Route::delete('admin/{id}', 'ApplicantsController@destroy');

//Route::get('admin/edit/{id}', ['as' => 'admin.edit', 'uses' => 'ApplicantsController@edit']);
//Route::put('admin/edit/{id}', 'ApplicantsController@update');