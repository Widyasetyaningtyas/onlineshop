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
//     return view('home');
// });
Route::get('/', 'HomeController@index')->name('home');
Route::get('/search', 'HomeController@search');



// Route::get('/', 'CokeController@index');

// Route::get('/', 'MugController@index');

Route::get('/coke','CokeController@index')->name('coke');

Route::get('/mug','MugController@index')->name('mug');

Route::get('/shop','ShopController@index')->name('shop');

Route::get('/keranjang','KeranjangController@index')->name('keranjang');



Route::get('login', 'AuthController@showFormLogin')->name('login');
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');

Route::get('logout', 'AuthController@logout')->name('logout');

Route::get('pesan/{id}','PesanController@index');
Route::post('pesan/{id}','PesanController@pesan')->name('pesan');
Route::get('check_out','PesanController@check_out');
