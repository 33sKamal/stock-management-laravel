<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


# HADO ROUTES DIAL PRODUCTS
Route::get('products/create', function () {
    return view('products.create');
})->name('create-dial-products');

Route::get('products/edit', function () {
    return view('products.edit');
})->name('edit-dial-products');

Route::get('products/index', function () {
    return view('products.index');
})->name('index-dial-products');


# HADO ROUTES DIAL STOCKS
Route::get('stocks/create', function () {
    return view('stocks.create');
})->name('create-dial-stocks');

Route::get('stocks/edit', function () {
    return view('stocks.edit');
})->name('edit-dial-stocks');

Route::get('stocks/index', function () {
    return view('stocks.index');
})->name('index-dial-stocks');

