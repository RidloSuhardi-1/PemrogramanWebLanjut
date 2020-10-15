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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', 'WelcomeController@hello');

// Route::get('/', 'HomeController1@welcome');
// Route::get('/about', 'AboutController@about');
// Route::get('/articles/{id}', 'ArticleController@articles');

// Routes Ngodingers News (KUIS 1)
// Route::get('/', 'MasterController@articleList')->name('artikels');
// Route::get('/artikel/{id}', 'ArtikelsController@artikelFind');
// Route::get('/tentang', 'TentangController');
// Route::get('/donasi', 'DonationController');

// Auth::routes();

// Main
// Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard');
Route::get('/articles/{id}', 'ArtikelsController@artikelFind');
Route::get('/tentang', 'TentangController');
Route::get('/donasi', 'DonationController');

// Login routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

// Register routes
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password routes
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetFrom')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
