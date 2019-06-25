<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


Route::resource('/', 'homepageController');


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

Route::get('/register', function () {
    return view('register');
});

Route::get('/review-form', 'reviewsController@create')->middleware('auth');
Route::post('/review-form', 'reviewsController@store');

Route::post('/profile', 'klantenController@update');
Route::get('/reviews', 'reviewsController@index');


Route::get('/profile', 'klantenController@show')->middleware('auth');
Route::post('/profile', 'klantenController@update')->middleware('auth');
Route::post('/login', 'klantenController@login');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::resource('products', 'fietsenController');
Route::post('products', 'fietsenController@filter');

Route::resource('admin', 'gebruikerController')->middleware('authenticated');


Route::get('cart', 'fietsenController@cart');
Route::get('cart/betaal', 'fietsenController@placeorder')->middleware('auth');


Route::patch('update-cart', 'fietsenController@update');

Route::delete('remove-from-cart', 'fietsenController@remove');

Route::get('admin/products/overview', 'gebruikerController@products')->middleware('authenticated');

Route::get('admin/users/overview', 'gebruikerController@users')->middleware('authenticated');

Route::get('admin/orders/overview', 'gebruikerController@orders')->middleware('authenticated');

Route::get('admin/reviews/overview', 'gebruikerController@reviews')->middleware('authenticated');


Route::get('admin/products/create', 'gebruikerController@createproduct')->middleware('authenticated');
Route::get('admin/users/create', 'gebruikerController@createuser')->middleware('authenticated');

Route::get('admin/products/{id}', 'gebruikerController@editproduct')->middleware('authenticated');

Route::get('admin/orders/{id}', 'gebruikerController@showorder')->middleware('authenticated');

Route::get('admin/reviews/{id}', 'gebruikerController@editreview')->middleware('authenticated');

Route::get('admin/users/{id}', 'gebruikerController@edituser')->middleware('authenticated');

Route::get('admin/users/delete/{id}', 'gebruikerController@deleteuser')->middleware('authenticated');
Route::get('admin/products/delete/{id}', 'gebruikerController@deleteproduct')->middleware('authenticated');

Route::get('add-to-cart/{id}', 'fietsenController@addToCart');

Route::resource('newsletter', 'nieuwsbriefController');

Route::post('register', 'klantenController@store');


Route::post('admin/products/create', 'gebruikerController@storeproduct')->middleware('authenticated');
Route::post('admin/products/edit/{id}', 'gebruikerController@editexistingproduct')->middleware('authenticated');
Route::post('admin/users/edit/{id}', 'gebruikerController@editexistinguser')->middleware('authenticated');

Route::post('admin/users/create', 'gebruikerController@storeuser')->middleware('authenticated');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
