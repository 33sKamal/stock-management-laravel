<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;
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


// Hadi blasat dial stocks
Route::get('stocks/create' ,[StockController::class , 'create'] )->name('create-dial-stocks');
Route::get('stocks/{stock_id}/edit' ,[StockController::class , 'edit'] )->name('edit-dial-stocks');
Route::post('stocks/{stock_id}/update' ,[StockController::class , 'update'] )->name('update-dial-stocks');
Route::post('stocks/store' ,[StockController::class , 'store'] )->name('store-dial-stocks');
Route::get('stocks/index' ,[StockController::class , 'index'] )->name('index-dial-stocks');
Route::post('stocks/delete/{stock_id}', [StockController::class , 'delete'])->name('delete-dial-stocks');

# HADO ROUTES DIAL STOCKS
// Route::get('stocks/create', function () {
//     return view('stocks.create');
// })->name('create-dial-stocks');
