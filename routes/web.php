<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProductController;

Route::redirect('/', 'products/index');

# Section Product
Route::get('products/index',[ProductController::class , 'index'])->name('index-dial-products');
Route::get('products/create',[ProductController::class , 'create'])->name('create-dial-products');
Route::post('products/create',[ProductController::class , 'store'])->name('create-dial-products');
Route::get('products/edit/{product_id}',[ProductController::class , 'edit'])->name('edit-dial-products');
Route::post('products/updateok', [ProductController::class , 'update'])->name('update-dial-products-ok');
Route::post('products/delete/{product_id}', [ProductController::class , 'delete'])->name('delete-dial-products');

# Section Stock
Route::get('stocks/create' ,[StockController::class , 'create'] )->name('create-dial-stocks');
Route::get('stocks/{stock_id}/edit' ,[StockController::class , 'edit'] )->name('edit-dial-stocks');
Route::post('stocks/{stock_id}/update' ,[StockController::class , 'update'] )->name('update-dial-stocks');
Route::post('stocks/store' ,[StockController::class , 'store'] )->name('store-dial-stocks');
Route::get('stocks/index' ,[StockController::class , 'index'] )->name('index-dial-stocks');
Route::post('stocks/delete/{stock_id}', [StockController::class , 'delete'])->name('delete-dial-stocks');

# Section Order
Route::get('orders/index' ,[OrderController::class , 'index'] )->name('index-dial-orders');
Route::get('orders/create' ,[OrderController::class , 'create'] )->name('create-dial-orders');
Route::get('orders/{order_id}/edit' ,[OrderController::class , 'edit'] )->name('edit-dial-orders');
Route::post('orders/{order_id}/update' ,[OrderController::class , 'update'] )->name('update-dial-orders');
Route::post('orders/store' ,[OrderController::class , 'store'] )->name('store-dial-orders');
Route::post('orders/delete/{order_id}', [OrderController::class , 'delete'])->name('delete-dial-orders');
 
