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

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/
Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

/*
|--------------------------------------------------------------------------
| Root / About / Home
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
  if(Auth::check()){
    return redirect('/programs');
  }

  return redirect()->route('about');
})->name('root');

Route::get('/about', function () {
  return view('about');
})->name('about');

Route::get('/home', function () {
  return redirect()->route('root');
})->name('home');

/*
|--------------------------------------------------------------------------
| Crud
|--------------------------------------------------------------------------
*/




