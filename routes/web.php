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
