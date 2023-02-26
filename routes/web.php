<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/classproduct','ClassProductController@index')->name('classproduct');
Route::post('/simpan-classproduct','ClassProductController@store')->name('simpan-classproduct');
Route::get('/classproduct/create','ClassProductController@create')->name('createclassproduct');
Route::get('/classproduct/{id}/edit','ClassProductController@edit')->name('edit-classproduct');
Route::patch('/classproduct/{id}','ClassProductController@update')->name('update-classproduct');
Route::delete('/classproduct/{id}','ClassProductController@destroy')->name('delete-classproduct');

// Group Product

Route::get('/groupproduct','GroupProductController@index')->name('groupproduct');
Route::post('/simpan-groupproduct','GroupProductController@store')->name('simpan-groupproduct');
Route::get('/groupproduct/create','GroupProductController@create')->name('creategroupproduct');
Route::get('/groupproduct/{id}/edit','GroupProductController@edit')->name('edit-groupproduct');
Route::patch('/groupproduct/{id}','GroupProductController@update')->name('update-groupproduct');
Route::delete('/groupproduct/{id}','GroupProductController@destroy')->name('delete-groupproduct');

//Product
Route::get('/product','ProductController@index')->name('product');
Route::post('/simpan-simpanproduct','ProductController@store')->name('simpan-product');
Route::get('/product/{id}/edit','ProductController@edit')->name('edit-product');
Route::patch('/product/{id}','ProductController@update')->name('update-product');
Route::delete('/product/{id}','ProductController@destroy')->name('delete-product');

Route::get('/home','HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');

// Route::get('/classproduct', function () {
//     return view('classproduct');
// });
