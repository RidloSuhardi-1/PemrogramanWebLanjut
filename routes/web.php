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
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/articles/{id}', 'ArtikelsController@artikelFind');
Route::get('/tentang', 'TentangController')->name('about');
Route::get('/donasi', 'DonationController')->name('donasi');
Route::get('/manageUsers', 'ManageUsersController@usersView')->name('manageUsers');
Route::get('/manageArticles', 'ManageController@articlesView')->name('manageArticles');

// Process
Route::get('/article/add', 'ManageController@add');
Route::post('/article/create', 'ManageController@create');
Route::get('/article/edit/{id}', 'ManageController@edit');
Route::post('/article/update/{id}', 'ManageController@update');
Route::get('/article/delete/{id}', 'ManageController@delete');
// Search user
Route::get('/searchArticle', 'ManageController@searchArticle');
// Print PDF - Artikel
Route::get('/article/cetak_pdf', 'ManageController@cetak_pdf');

// Comment Process
Route::post('/article/addComm/{id}', 'ArtikelsController@addCom');
Route::get('/article/delComm/{id}/{articleid}', 'ArtikelsController@delCom');

//user
Route::get('/users/register', 'ManageUsersController@register');
Route::post('/users/createUser', 'ManageUsersController@create');
Route::get('/users/editUser/{id}', 'ManageUsersController@edit');
Route::post('/users/updateUser/{id}', 'ManageUsersController@update');
Route::get('/users/dropUser/{id}', 'ManageUsersController@drop');
// Search user
Route::get('/searchUser', 'ManageUsersController@searchUser');
// Print PDF - User
Route::get('/users/cetak_pdf', 'ManageUsersController@cetak_pdf');