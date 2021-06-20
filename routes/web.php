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


Route::get('/', function () {
    return view('welcome');
});


/* products Routes */
Route::get('/', 'App\Http\Controllers\ProductController@index')->name('products.index');
Route::get('/{slug}', 'App\Http\Controllers\productController@show')->name('products.show');
Route::get('/search', 'App\Http\Controllers\ProductoController@search')->name('products.search');

/* cart Routes */
Route::get('/panier', 'App\Http\Controllers\CartController@index')->name('cart.index');
Route::post('/panier/ajouter', 'App\Http\Controllers\CartController@store')->name('cart.store');
Route::patch('/panier/{rowId}', 'App\Http\Controllers\CartController@update')->name('cart.update');
Route::delete('/panier/{rowId}', 'App\Http\Controllers\CartController@destroy')->name('cart.destroy');