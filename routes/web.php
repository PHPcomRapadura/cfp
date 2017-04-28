<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


//EVENTO
Route::resource('/event','EventController');

//EVENTO
Route::resource('/talk','TalkController');