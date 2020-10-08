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

Route::get('/', 'HomeController1@welcome');
Route::get('/about', 'AboutController@about');
Route::get('/articles/{id}', 'ArticleController@articles');

// Routes Ngodingers News (KUIS 1)
// Route::get('/', 'MasterController@articleList')->name('artikels');
// Route::get('/artikel/{id}', 'ArtikelsController@artikelFind');
// Route::get('/tentang', 'TentangController');
// Route::get('/donasi', 'DonationController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
