<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'products/index');

Route::get('products/index',[ProductController::class , 'index'])->name('index-dial-products');

Route::get('products/create',[ProductController::class , 'create'])->name('create-dial-products');

Route::post('products/create',[ProductController::class , 'store'])->name('create-dial-products');

// Hna edit dial products
Route::get('products/edit/{product_id}',[ProductController::class , 'edit'])->name('edit-dial-products');

// Hna anmodifier wahed products
Route::post('products/updateok', [ProductController::class , 'update'])->name('update-dial-products-ok');

// Hna anmodifier wahed products
Route::post('products/delete/{product_id}', [ProductController::class , 'delete'])->name('delete-dial-products');


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
