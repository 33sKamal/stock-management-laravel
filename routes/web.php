<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


# HADO ROUTES DIAL PRODUCTS
Route::get('products/create', function () {
    return view('products.create');
})->name('create-dial-products');


Route::post('products/create', function (Request $request) {

    // ANjobo data
    $data = $request->all();

    // anhatoha f labase de donne

    Product::create([
        'name' => $data['name'],
        'price' => $data['price'],
        'description' => $data['description'],
    ]);

    // anreje3o fhalna
       
    return view('products.create');


})->name('create-dial-products');


Route::get('products/edit', function () {
    return view('products.edit');
})->name('edit-dial-products');

Route::get('products/index', function () {
    
   $products = Product::all();
    
    return view('products.index')->with('products' , $products);


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

