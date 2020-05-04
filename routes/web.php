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

Route::get('/', 'MainController@index')->name('index');
Auth::routes();
Route::get('/about', 'MainController@about')->name('about');
Route::get('/cart', 'ProductsController@cart')->name('cart');
Route::patch('update-cart', 'ProductsController@update');
Route::delete('remove-from-cart', 'ProductsController@remove');
Route::post('/makeOrder', 'MainController@storeOrder')->name('storeOrder');
Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::group(['middleware' => 'isAdmin'], function () {
    Route::get('/listProduct', 'AdminController@listProd')->name('listProduct');
    Route::get('/listCategory', 'AdminController@listCat')->name('listCategory');
    Route::get('/listOrders', 'AdminController@listOrder')->name('listOrder');
    Route::get('/addProduct', 'ProductController@addProd')->name('addProduct');
    Route::post('/addProduct', 'ProductController@store')->name('store');
    Route::get('/edit/{id}', 'ProductController@edit')->name('edit');
    Route::get('/editCategory/{id}', 'CategoryController@edit')->name('editc');
    Route::post('/update/{id}', 'ProductController@update')->name('update');
    Route::post('/updateCategory/{id}', 'CategoryController@update')->name('updatec');
    Route::delete('/delete/{id}', 'ProductController@delete')->name('delete');
    Route::delete('/deleteCategory/{id}', 'CategoryController@delete')->name('deletec');
    Route::delete('/deleteOrder/{id}', 'AdminController@deleteOrder')->name('deleteOrder');
    Route::get('/send/{id}', 'MailController@send')->name('mail');

});
Route::delete('deleteCart', 'MainController@delete')->name('deleteCart');
Route::get('/add-to-cart/{id}', 'ProductsController@addToCart');
Route::get('/{category}', 'MainController@category')->name('category');

