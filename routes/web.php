<?php

use App\Http\Middleware\CheckDevice;

Route::get('/', function () {
    return view('welcome');
})->middleware(CheckDevice::class);

Route::get('sorry', function (){
    return view('sorry');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
