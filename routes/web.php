<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes([
    'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login', function () {
    return redirect('/');
});

Route::get('register', function () {
    return redirect('/');
});

Route::get('admin', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');

Route::get('dashboard/portfolio', 'AuthController@dashboard');

Route::get('dashboard/menus', 'MenuController@index');
Route::get('dashboard/menus/update','MenuController@update');

