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

Route::get('/reviews', function() {
    return view('reviews');
});

Route::post("/login", "klantenController@login");
Route::resource("products", "fietsenController");
Route::post("products", "fietsenController@filter");

Route::resource("admin", "gebruikerController");


Route::get('cart', 'fietsenController@cart');

Route::patch('update-cart', 'fietsenController@update');

Route::delete('remove-from-cart', 'fietsenController@remove');

Route::get("admin/products/overview", "gebruikerController@products");

Route::get("admin/users/overview", "gebruikerController@users");


Route::get('admin/products/{id}', 'gebruikerController@editproduct');

Route::get('admin/users/{id}', 'gebruikerController@edituser');

Route::get('admin/users/delete/{id}', 'gebruikerController@deleteuser');
Route::get('admin/products/delete/{id}', 'gebruikerController@deleteproduct');

Route::get('add-to-cart/{id}', 'fietsenController@addToCart');

Route::resource("newsletter", "nieuwsbriefController");
