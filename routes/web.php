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
    return view('users.pages.newsFeed');
});

Route::get('/search', function () {
    return view('users.pages.searchAll');
});
Route::get('/simage', function () {
    return view('users.pages.searchImages');
});
Route::get('/profile', function () {
    return view('ProfileHome');
});