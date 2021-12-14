<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //


    public function index()
    {

        // $products = \App\Models\Product::get(); // jiblia Kolchi
        // $products = \App\Models\Product::take(3)->get(); // khoudliangher 3
        // $products = \App\Models\Product::skip(3)->take(4)->get(); // foutlia 3 okhoud 4
        // $products = \App\Models\Product::get()->skip(0); // foutlia 3 ikhoud kolchi
        // $products = \App\Models\Product::whereDate('created_at' , '=' , now())->get(); // jiblia li tarikh dialhom ...

        $products = \App\Models\Product::get();

        return view('products.index')->with('products', $products);
    }

    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        // ANjobo data 
        $data = $request->all();

        // anhatoha f labase de donne

        \App\Models\Product::create([
            'name' => $data['name'],
            'price' => $data['price'],
            'description' => $data['description'],
        ]);

        // anreje3o la page dial index
        $products = \App\Models\Product::get();


        return view('products.index')->with('products', $products);
    }
}
