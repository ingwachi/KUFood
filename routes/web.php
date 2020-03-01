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
    return view('homepage');
})->name('root');

Route::get('/content1', function () {
    return view('dessert');
});

Route::get('/content2', function () {
    return view('buffet');
});

Route::resource('/content3', 'SukiController');

Route::resource('/restaurants', 'RestaurantsController');

Route::get('/restaurants/menu/{restaurant}/create/', 'RestaurantsController@createMenu')->name('restaurants.menu.create');

Route::post('/restaurants/{restaurant}/menu/store', 'RestaurantsController@storeMenu')->name('restaurant.menu.store');

Route::get('/restaurants/{restaurant}/{menu}/menu/edit', 'RestaurantsController@editMenu')->name('restaurant.menu.edit');

Route::put('/restaurants/{restaurant}/{menu}/update', 'RestaurantsController@updateMenu')->name('restaurant.menu.update');

Route::delete('/restaurant/{restaurant}/{menu}/delete', 'RestaurantsController@deleteMenu')->name('restaurant.menu.delete');

