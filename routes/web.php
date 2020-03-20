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
Route::post('dashboard/menus/update','MenuController@update')->name('menuUpdate');
Route::get('dashboard/menus/delete/{id}','MenuController@destroy')->name('menuDelete');
Route::get('dashboard/menus/addmenu','MenuController@store')->name('menuAdd');

// admin/page/homepage
Route::get('/dashboard/page/home/', 'HomePageController@index');
Route::post('/dashboard/page/home/', 'HomePageController@imageUploadPost')->name('image.upload.post');
Route::post('/dashboard/page/home/{id}', 'HomePageController@imageUploadUpdate')->name('image.upload');

// admin/page/about
Route::get('/dashboard/page/about', 'AboutController@index');
Route::post('/dashboard/page/about', 'AboutController@store')->name('about.store');
Route::post('/dashboard/page/about/delete/{id}','AboutController@destroy')->name('aboutKeyDelete');
Route::post('/dashboard/page/about/update/{id}', 'AboutController@update')->name('aboutKeyUpdate');


