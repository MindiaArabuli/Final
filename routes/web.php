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

//Route::get('/', 'PagesController@index'); 
Route::get('/admin', 'PagesController@admin'); 
Route::get('/admin/main', 'PagesController@index'); 
Route::get('/admin/home', 'SlidsController@index'); 
Route::get('/admin/dashboard', 'PagesController@dashboard');
Route::resource('admin/home','SlidsController');
Route::get('/','MainController@index');
Route::post('','MainController@store');
Route::resource('admin/subscribers','SubscribersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

