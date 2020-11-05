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

Auth::routes();

// Main
Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard');
Route::get('/articles/{id}', 'ArtikelsController@artikelFind');
Route::get('/tentang', 'TentangController');
Route::get('/donasi', 'DonationController');
Route::get('/manage', 'ManageController@index')->name('manage');

// Process
Route::get('/article/add', 'ManageController@add');
Route::post('/article/create', 'ManageController@create');
Route::get('/article/edit/{id}', 'ManageController@edit');
Route::post('/article/update/{id}', 'ManageController@update');
Route::get('/article/delete/{id}', 'ManageController@delete');

// Comment Process
Route::post('/article/addComm/{id}', 'ManageController@addCom');
Route::get('/article/delComm/{id}/{articleid}', 'ManageController@delCom');