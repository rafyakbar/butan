<?php

Route::get('/home', 'HomeController@index')->name('home');

Route::get('setting', function (){
    return view('user\settings');
})->name('setting');

Route::get('/', function () {
    return view('welcome');
});

Route::post('updatedataumum','UserController@editUmum')->name('updatedataumum');

Route::post('updatedatapassword','UserController@editPassword')->name('updatedatapassword');

Route::get('friends',function (){
    return view('user\teman');
})->name('friends');