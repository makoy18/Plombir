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

Route::domain('{admin}.plombir.hh')->group(function () {
	Route::get('/', 'AdminController@index')->name('admin.main');
});

Route::get('/categories', 'CategoriesController@index')->name('category.categories');

Route::get('/create', 'CategoriesController@create')->name('category.create');

Route::get('/', 'MainController@index')->name('main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

