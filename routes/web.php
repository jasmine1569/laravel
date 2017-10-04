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

Route::get('about', function () {
    return view('pages.about');
});

Route::get('help', function () {
    return view('pages.help');
});

Route::get('login', function () {
    return view('pages.login');
});

Route::get('dashboard-home', function () {
    return view('pages.dashboard.dashboard-home');
});

Route::get('dashboard-profile', function () {
    return view('pages.dashboard.dashboard-profile');
});

Route::get('dashboard-class', function () {
    return view('pages.dashboard.dashboard-class');
});

Route::get('dashboard-projects', function () {
    return view('pages.dashboard.dashboard-projects');
});

Route::get('dashboard-extras', function () {
    return view('pages.dashboard.dashboard-components');
});

Route::get('dashboard-awards', function () {
    return view('pages.dashboard.dashboard-awards');
});





//Test Page
Route::get('test', function () {
    return view('pages.test.test');
});