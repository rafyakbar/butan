<?php



Route::get('sorry', function (){
    return view('sorry');
});

Auth::routes();