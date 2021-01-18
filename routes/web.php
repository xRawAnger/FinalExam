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

Route::get('/','HomeController@OpenPage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/normalUser', 'Auth\LoginController@showNormalUserLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/normalUser', 'Auth\RegisterController@showNormalUserRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/normalUser', 'Auth\LoginController@normalUserLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/normalUser', 'Auth\RegisterController@createNormalUser');


Route::post("/add-product","ProductsController@save")->name("saveproducts");
Route::get("/add-product","ProductsController@save")->name("saveproducts");

Route::view('/admin', 'layouts.admin');
Route::view('/normalUser', 'layouts.normalUser');

Route::get('/landing','HomeController@OpenPage');
Route::get('/landingUser','HomeController@UserLanding');
