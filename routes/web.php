<?php

use Illuminate\Support\Facades\Route;



Route::get ('/'   , 'homeController@index')->name('index');



Route::get ('/hotels/{City?}'   , 'hotelsController@index')->name('index.hotels');
Route::get ('/hotel/{Hotel}/'   , 'hotelsController@Hotel')->name('hotel');
Route::POST('/hotels/booking/'   , 'hotelsController@booking')->name('post.hotels.booking');
Route::POST('/hotels/reserve/'   , 'hotelsController@reserve')->name('post.hotels.reserve');
Route::get ('/hotels/reserve/confirmation'   , 'hotelsController@confirmation')->name('hotels.confirmation');
