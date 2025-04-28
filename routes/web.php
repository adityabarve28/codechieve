<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});
Route::get('/index', function () {
    return view('index');
})->name("index") ;
Route::get('/about', function () {
    return view('about');
})->name("about") ;