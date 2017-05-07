<?php

Auth::routes();

Route::resource('/event','EventController');
Route::resource('/talk','TalkController');
Route::resource('/user','UserController');
Route::get('/home', 'HomeController@home');
Route::get('/', 'HomeController@index');