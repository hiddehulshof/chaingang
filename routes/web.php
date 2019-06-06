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

//Route::get('/', function () {
//    return view('welcome');
//});
use App\Bike;
use Illuminate\Support\Facades\Input;

Route::resource("/", "homepageController");

Route::get('/admin', function () {
    return view('admin/admin');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login-page');
});
Route::get('/over-ons', function () {
    return view('over-ons');
});

//Route::get('/product', function () {
//    return view('products/product_details');
//});
Route::get('/profile', function () {
    return view('customers/profile');
});
Route::post("/login", "klantenContrller@login");
Route::resource("products", "fietsenController");
Route::post("products", "fietsenController@filter");

Route::resource("newsletter", "nieuwsbriefController");
//Route::get('/products/product', function () {
//    return view('products/product_details');
//});

