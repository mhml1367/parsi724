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
    return view('home');
});



Route::get ('/hotels/{City?}'   , 'hotelsController@index')->name('index.hotels');
Route::get ('/hotel/{Hotel}/'   , 'hotelsController@Hotel')->name('hotel');
Route::POST('/hotels/reserve/'   , 'hotelsController@reserve')->name('post.hotels.reserve');
Route::get ('/hotels/reserve/confirmation'   , 'hotelsController@confirmation')->name('hotels.confirmation');
