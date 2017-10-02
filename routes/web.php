<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('login', function () {
    return view('pages.login');
});

Route::get('dashboard', function () {
    return view('pages.dashboard');
});

Route::get('help', function () {
    return view('pages.help');
});

Route::get('about', function () {
    return view('pages.about');
});