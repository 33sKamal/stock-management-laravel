<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'products/index');

Route::get('products/index',[ProductController::class , 'index'])->name('index-dial-products');

Route::get('products/create',[ProductController::class , 'create'])->name('create-dial-products');

Route::post('products/create',[ProductController::class , 'store'])->name('create-dial-products');


// Hna edit dial products
Route::get('products/edit/{product_id}', function ($product_id) {

    $productLiModif = \App\Models\Product::where('id', '=', $product_id)->first();


    return view('products.edit')->with('productLiModif', $productLiModif);
})->name('edit-dial-products');



// Hna anmodifier wahed products
Route::post('products/updateok', function (Request $request) {

    // kanhet data hnaya lijatni men HTML
    $data = $request->all();

    $product_id = $data['productId'];

    \App\Models\Product::where('id' , '=' , $product_id)->update([
        'name' => $data['name'],
        'price' => $data['price'],
        'description' => $data['description'],
    ]);

    // anreje3o la page dial index
    $products = \App\Models\Product::get();

    return view('products.index')->with('products', $products);
})->name('update-dial-products-ok');


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
