<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


//EVENTO
Route::resource('/event','EventController');

//TALK
Route::resource('/talk','TalkController');

//USER
Route::resource('/user','UserController');