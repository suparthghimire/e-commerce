<?php

use App\Http\Controllers\ProductsController;
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

Route::get('/','PagesController@getIndex');

Route::resource('hoodies', 'HoodiesController');

Route::get('cart','ProductsController@cart');

Route::get('product',[
    'uses'=>'ProductsController@index',
    'as'=>'product.index'
]);
Route::get('product/{id}','ProductsController@show',['name'=>'show']);
Route::get('add-to-cart/{id}','ProductsController@add_to_cart');
Route::get('remove/{id}',[
    'uses'=> 'ProductsController@removeItem',
    'as'=>'cart.remove'
]);
