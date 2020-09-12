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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('/customer', 'CustomerController@index')->name('customer')->middleware('customer');

// Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');


Route::middleware(['admin'])->group(function () {
    Route::prefix('admin')->group(function () {

    
        Route::resource('category','Admin\CategoryController');

        Route::resource('food','Admin\FoodController');
    
     
    
    });
});


Route::middleware(['customer'])->group(function () {
  
        Route::get('cart','CartController@index')->name('cart');

        Route::get('add-to-cart/{id}/{q}','CartController@addToCart')->name('add_to_cart');

        Route::get('update-cart/{id}/{q}','CartController@updateCart')->name('update_cart');
    
        Route::get('remove-from-cart/{id}','CartController@removeFromCart')->name('remove_from_cart');

        Route::get('/cart_checkout', 'OrderController@cartCheckout')->name('cart_checkout');
        
        Route::get('thanku', function(){
            return view('frontend.thanku');
        })->name('thanku');
});

Route::resource('address','AddressController');

Route::get('about_us', function(){
    return view('frontend.about_us');
})->name('about_us');

Route::get('contact_us', function(){
    return view('frontend.contact_us');
})->name('contact_us');
Route::get('menu', function(){
    return view('frontend.menu');
})->name('menu');
Route::get('franchisee', function(){
    return view('frontend.franchisee');
})->name('franchisee');


Route::get('/order_list', 'OrderController@getAllOrders');