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
    return view('welcome');
});
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

Route::get('/products', function () {
    return view('products/index');
});
Route::get('/products/product', function () {
    return view('products/product_details');
});