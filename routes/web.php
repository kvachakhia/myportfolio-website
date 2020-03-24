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

Auth::routes(['register' => false, ]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login', function ()
{
    return redirect('/admin');
});

Route::get('register', function ()
{
    return redirect('/');
});

Route::get('/home', function ()
{
    return redirect('/');
});

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

//auth
Route::get('admin', 'AuthController@index')
    ->name('admin');
Route::post('post-login', 'AuthController@postLogin');
Route::get('dashboard', 'AuthController@dashboard');
Route::get('logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'], function ()
{

    // admin/page/Menus
    Route::get('dashboard/menus', 'MenuController@index');
    Route::post('dashboard/menus/update', 'MenuController@update')
        ->name('menuUpdate');
    Route::get('dashboard/menus/delete/{id}', 'MenuController@destroy')
        ->name('menuDelete');
    Route::get('dashboard/menus/addmenu', 'MenuController@store')
        ->name('menuAdd');

    // admin/page/homepage
    Route::get('/dashboard/page/home/', 'HomePageController@index')
        ->name('homepage');
    Route::post('/dashboard/page/home/', 'HomePageController@imageUploadPost')
        ->name('image.upload.post');
    Route::post('/dashboard/page/home/{id}', 'HomePageController@imageUploadUpdate')
        ->name('image.upload');

    // admin/page/about
    Route::get('/dashboard/page/about', 'AboutController@index');
    Route::post('/dashboard/page/about', 'AboutController@store')
        ->name('about.store');
    Route::post('/dashboard/page/about/delete/{id}', 'AboutController@destroy')
        ->name('aboutKeyDelete');
    Route::post('/dashboard/page/about/update/{id}', 'AboutController@update')
        ->name('aboutKeyUpdate');

    // admin/page/resume
    Route::get('/dashboard/page/resume', 'ResumeController@index');
    Route::post('/dashboard/page/resume', 'ResumeController@store')
        ->name('resume.store');
    Route::post('/dashboard/page/resume/delete/{id}', 'ResumeController@destroy')
        ->name('resumeKeyDelete');
    Route::post('/dashboard/page/resume/update/{id}', 'ResumeController@update')
        ->name('resumeKeyUpdate');

    // admin/page/services
    Route::get('/dashboard/page/services', 'ServiceController@index');
    Route::get('/dashboard/page/services/addnew', 'ServiceController@addnewservice')
        ->name('addnewservice');
    Route::post('/dashboard/page/services/addnewservice', 'ServiceController@store')
        ->name('serviceAdd');
    Route::get('/dashboard/page/services/editservice/{id}', 'ServiceController@editservice')
        ->name('editService');
    Route::post('/dashboard/page/services/update/{id}', 'ServiceController@update')
        ->name('serviceUpdate');
    Route::post('/dashboard/page/services/delete/{id}', 'ServiceController@destroy')
        ->name('serviceDelete');

    // admin/page/portfolio
    Route::get('/dashboard/page/portfolio', 'PortfolioController@index');
    Route::get('/dashboard/page/portfolio/addnew', 'PortfolioController@addnewportfolio')
        ->name('addnew');
    Route::post('/dashboard/page/portfolio/addnew/portfolio', 'PortfolioController@store')
        ->name('addPortfolio');
    Route::get('/dashboard/page/portfolio/editportfolio/{id}', 'PortfolioController@editportfolio')
        ->name('edtiPortfolio');
    Route::post('/dashboard/page/portfolio/update/{id}', 'PortfolioController@update')
        ->name('updatePortfolio');
    Route::post('/dashboard/page/portfolio/delete/{id}', 'PortfolioController@destroy')
        ->name('deletePortfolio');

    // admin/page/blogs
    Route::get('/dashboard/page/blogs', 'BlogController@index');
    Route::get('/dashboard/page/blogs/addnew', 'BlogController@addnewblog')
        ->name('addnew');
    Route::post('/dashboard/page/blogs/addnew/blog', 'BlogController@store')
        ->name('addBlog');
    Route::get('/dashboard/page/blogs/editblog/{id}', 'BlogController@editblog')
        ->name('edtiBlog');
    Route::post('/dashboard/page/blogs/update/{id}', 'BlogController@update')
        ->name('updateBlog');
    Route::post('/dashboard/page/blogs/delete/{id}', 'BlogController@destroy')
        ->name('deleteBlog');

    // admin/page/about
    Route::get('/dashboard/page/contact', 'ContactController@index');
    Route::post('/dashboard/page/contact', 'ContactController@store')
        ->name('contactStore');
    Route::post('/dashboard/page/contact/update/{id}', 'ContactController@update')
        ->name('contactKeyUpdate');
    Route::post('/dashboard/page/contact/delete/{id}', 'ContactController@destroy')
        ->name('contactcontactKeyDelete');
});

//homepage
Route::get('/', 'FrontpageController@index');

//About
Route::get('/about', 'AboutController@show');

//services
Route::get('/services', 'ServiceController@show');

//portfolio
Route::get('/projects', 'PortfolioController@projects');
Route::get('/portfolio/{slug}/', 'PortfolioController@show');

//portfolio
Route::get('/blogs', 'BlogController@blogs');
Route::get('/blog/{slug}/', 'BlogController@show');

//contact
Route::get('/contact', 'ContactController@show');

