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

Auth::routes();

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/', function () {
    return redirect()->route('about');
})->name('root');

Route::get('/home', function () {
    return redirect()->route('about');
})->name('home');
