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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'AuthController@getLogin');
Route::get('/register', 'AuthController@getRegister');
Route::post('/dashboard', 'AuthController@PostLogin')->name('loginn');
Route::post('/register', 'AuthController@PostRegister')->name('register');
Route::get('/welcome', 'AuthController@Logout')->name('logout');
Route::get('/upload', 'DashController@getUpload');
Route::get('/dashboard', 'DashController@index');
Route::get('/document_approval', 'DashController@getApproval');
Route::get('/document_arhived', 'DashController@getArhived');
Route::get('/recent_activity', 'DashController@getActivity');
Route::get('/profile', 'DashController@getProfile');
Route::get('/document_detail', 'DashController@getDetail');
