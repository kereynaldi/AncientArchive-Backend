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
Route::get('/register', 'RegisterController@getRegister');
Route::post('/register', 'RegisterController@PostRegister')->name('register');

//LOGIN LOGOUT ROUTES
Route::get('/login', 'LoginController@index'); //login index
Route::post('/login/checklogin', 'LoginController@checklogin'); //check login func
Route::get('login/logout', 'LoginController@logout')->name('logout'); //logout

//DASHCONTROLLER ROUTES
//semua ini bisa diakses jika session('key') sudah 1
Route::get('/dashboard/user', 'DashController@index')->name('user_dashboard'); //dashboard biru
Route::get('/dashboard/admin', 'DashController@index')->name('admin_dashboard'); //dashboard merah

Route::get('/document_approval', 'DashController@getApproval')->name('document_approval'); //approval biru
Route::get('/admin_document_approval','DashController@getAdminApproval')->name('admin_document_approval'); //approval merah

Route::get('/document_archived', 'DashController@getArchived')->name('document_archived');

Route::get('/recent_activity', 'DashController@getActivity')->name('recent_activity');

//ROUTE PROFIL
Route::get('/profile', 'UserController@getProfile');
Route::patch('/profile', 'UserController@editAvatar')->name('editavatar');
Route::patch('/profile/update', 'UserController@editProfil')->name('editprofile');

//ROUTE UPLOAD
Route::get('/upload', 'DashController@getUpload');
Route::post('/upload/post', 'SuratController@uploadSurat')->name('uploadpost');

Route::get('/document_detail/{$id}', 'SuratController@getDetail')->name('document_detail');
