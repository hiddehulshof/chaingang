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


Route::resource("/", "homepageController");


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login-page');
});
Route::get('/over-ons', function () {
    return view('over-ons');
});

Route::get('/product', function () {
    return view('products/product_details');
});
Route::get('/profile', function () {
    return view('customers/profile');
});

Route::get('/register', function () {
    return view('register');
});

Route::post("/login", "klantenController@login");
Route::resource("products", "fietsenController");
Route::post("products", "fietsenController@filter");

Route::resource("admin", "gebruikerController");


Route::get('cart', 'fietsenController@cart');
Route::get('cart/betaal', 'fietsenController@placeorder');



Route::patch('update-cart', 'fietsenController@update');

Route::delete('remove-from-cart', 'fietsenController@remove');

Route::get("admin/products/overview", "gebruikerController@products");

Route::get("admin/users/overview", "gebruikerController@users");

Route::get("admin/orders/overview", "gebruikerController@orders");

Route::get("admin/reviews/overview", "gebruikerController@reviews");


Route::get('admin/products/create', 'gebruikerController@createproduct');

Route::get('admin/products/{id}', 'gebruikerController@editproduct');

Route::get('admin/orders/{id}', 'gebruikerController@showorder');

Route::get('admin/reviews/{id}', 'gebruikerController@editreview');

Route::get('admin/users/{id}', 'gebruikerController@edituser');

Route::get('admin/users/delete/{id}', 'gebruikerController@deleteuser');
Route::get('admin/products/delete/{id}', 'gebruikerController@deleteproduct');

Route::get('add-to-cart/{id}', 'fietsenController@addToCart');

Route::resource("newsletter", "nieuwsbriefController");


Route::post("admin/products/create", 'gebruikerController@storeproduct');
Route::post("admin/products/edit/{id}", 'gebruikerController@editexistingproduct');
