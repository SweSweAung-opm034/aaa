<?php

Route::get('/create_product', 'ProductController@createProduct');
Route::post('/addProduct', 'ProductController@addProduct');
Route::get('/product_list', 'ProductController@productList');
Route::get('/home', 'ProductController@show');
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('admin.header');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/detail', 'ProductController@detail');
