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

//REGISTER ROUTES - stricted access
Route::get('/register', 'AuthController@getRegister');
Route::post('/register', 'AuthController@PostRegister')->name('register');

//LOGIN LOGOUT ROUTES
Route::get('/login', 'LoginController@index'); //login index
Route::post('/login/checklogin', 'LoginController@checklogin'); //check login func
Route::get('/successlogin', 'LoginController@successlogin'); //session start func
Route::get('login/logout', 'LoginController@logout')->name('logout'); //logout

//DASHCONTROLLER ROUTES
//semua ini bisa diakses jika session('key') sudah 1
Route::get('/dashboard', 'DashController@index')->name('dashboard');
Route::get('/document_approval', 'DashController@getApproval')->name('document_approval');
Route::get('/document_archived', 'DashController@getArchived')->name('document_archived');
Route::get('/recent_activity', 'DashController@getActivity')->name('recent_activity');
Route::get('/document_detail', 'DashController@getDetail')->name('document_detail');

//ROUTE PROFIL
Route::patch('/profile', 'UserController@editProfil')->name('editprofile');

//ROUTE UPLOAD
Route::get('/upload', 'DashController@getUpload');
