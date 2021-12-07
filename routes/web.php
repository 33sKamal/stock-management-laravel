<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'products/index');

# HADO ROUTES DIAL PRODUCTS
Route::get('products/create', function () {
    return view('products.create');
})->name('create-dial-products');


Route::post('products/create', function (Request $request) {

    // ANjobo data 

    $data = $request->all();

    // anhatoha f labase de donne

    \App\Models\Product::create([
        'name' => $data['name'],
        'price' => $data['price'],
        'description' => $data['description'],
    ]);

    // anreje3o fhalna
    $products = \App\Models\Product::get();


    return view('products.index')->with('products', $products);
})->name('create-dial-products');


// Hna edit dial products
Route::get('products/edit/{product_id}', function ($product_id) {

    $productLiModif = \App\Models\Product::where('id', '=', $product_id)->first();


    return view('products.edit')->with('productLiModif' , $productLiModif);

})->name('edit-dial-products');

Route::get('products/index', function () {


    // $products = \App\Models\Product::get(); // jiblia Kolchi
    // $products = \App\Models\Product::take(3)->get(); // khoudliangher 3
    // $products = \App\Models\Product::skip(3)->take(4)->get(); // foutlia 3 okhoud 4
    // $products = \App\Models\Product::get()->skip(0); // foutlia 3 ikhoud kolchi
    // $products = \App\Models\Product::whereDate('created_at' , '=' , now())->get(); // jiblia li tarikh dialhom ...
    $products = \App\Models\Product::get();

    return view('products.index')->with('products', $products);
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
