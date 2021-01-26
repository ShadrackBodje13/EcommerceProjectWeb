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
//Dashboard
//login
Route::get('admin', 'loginController@adminIndex')->name('admin.login');
Route::post('admin', 'loginController@adminPosted');

Route::group(['middleware' => 'admin'], function(){

 
    Route::get("/adminPanel", 'adminPanel\dashboardController@index')->name('admin.dashboard');

    Route::get('admin/logout', 'loginController@adminLogout')->name('admin.logout');
    //categories
    Route::get('/adminPanel/categories', 'adminPanel\categoriesController@index')->name('admin.categories');
    Route::post('/adminPanel/categories', 'adminPanel\categoriesController@posted');

    Route::get('/adminPanel/categories/edit/{id}', 'adminPanel\categoriesController@edit')->name('admin.categories.edit');
    Route::post('/adminPanel/categories/edit/{id}', 'adminPanel\categoriesController@update');

    Route::get('/adminPanel/categories/delete/{id}', 'adminPanel\categoriesController@delete')->name('admin.categories.delete');
    Route::post('/adminPanel/categories/delete/{id}', 'adminPanel\categoriesController@destroy');


    //products
    Route::get('/adminPanel/products', 'adminPanel\productsController@index')->name('admin.products');

    Route::get('/adminPanel/products/create', 'adminPanel\productsController@create')->name('admin.products.create');
    Route::post('/adminPanel/products/create', 'adminPanel\productsController@store');

    Route::get('/adminPanel/products/edit/{id}', 'adminPanel\productsController@edit')->name('admin.products.edit');
    Route::post('/adminPanel/products/edit/{id}', 'adminPanel\productsController@update');

    Route::get('/adminPanel/products/delete/{id}', 'adminPanel\productsController@delete')->name('admin.products.delete');
    Route::post('/adminPanel/products/delete/{id}', 'adminPanel\productsController@destroy');

    //order management 
    Route::get('/adminPanel/management', 'adminPanel\managementController@manage')->name('admin.orderManagement');
    Route::post('/adminPanel/management', 'adminPanel\managementController@update')->name('admin.orderUpdate');

});

Route::get('/login', 'loginController@userIndex')->name('user.login');
Route::post('/login', 'loginController@userPosted');

//signup
Route::get('/signup', 'signupController@userIndex')->name('user.signup');
Route::post('/signup', 'signupController@userPosted');
Route::post('/check_email', 'signupController@emailCheck')->name('user.signup.check_email');


//user
Route::get('/', 'user\userController@index')->name('user.home');
Route::get('/product/{id}', 'user\userController@view')->name('user.product');

Route::get('/search', 'user\userController@search')->name('user.search');
Route::get('/search?c={id}', 'user\userController@view')->name('user.search.cat');



Route::get('/view/{id}', 'user\userController@view')->name('user.view');
Route::post('/view/{id}', 'user\userController@post');

Route::get('/cart', 'user\userController@cart')->name('user.cart');
Route::post('/cart', 'user\userController@confirm');

Route::post('/edit_cart', 'user\userController@editCart')->name('user.editCart');
Route::post('/delete_item_from_cart', 'user\userController@deleteCartItem')->name('user.deleteCartItem');


Route::get('/logout', 'loginController@userLogout')->name('user.logout');

Route::group(['middleware' => 'user'], function(){
Route::get('/history', 'user\userController@history')->name('user.history');
});
