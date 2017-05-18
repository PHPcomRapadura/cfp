<?php
Auth::routes();
Route::get('/', 'HomeController@index');

Route::group(['middleware' => ['permissions']], function () {
    Route::get('/home', 'HomeController@home');
    Route::resource('/event', 'EventController');
	Route::resource('/talk', 'TalkController');
	Route::get('/talks', 'TalkController@all')->name('talks.all');
	Route::resource('/user', 'UserController');
});
