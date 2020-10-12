<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| fontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('website.home');
});

Route::get('/about', function () {
    return view('website.about');
});

Route::get('/category', function () {
    return view('website.category');
});

Route::get('/contact', function () {
    return view('website.contact');
});

/*
|--------------------------------------------------------------------------
| backend Routes
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('admin.index');
});