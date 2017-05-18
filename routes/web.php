<?php
Auth::routes();
Route::get('/', 'HomeController@index');

Route::group(['middleware' => ['permissions']], function () {
    Route::get('/home', 'HomeController@home');
    Route::resource('/event', 'EventController');
	Route::resource('/talk', 'TalkController');
	Route::get('/talks', 'TalkController@all')->name('talk.all');
	Route::get('/talks/{$id}', 'TalkController@all');
	Route::resource('/user', 'UserController');
});
