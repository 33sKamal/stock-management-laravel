<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    //


    public function index()
    {
        $orders = \App\Models\Order::get();
        return view('orders.index')->with('orders', $orders);
    }

    public function create()
    {
        $products = Product::all();
        return view('orders.create')->with('products', $products);
    }


    public function store(Request $request)
    {

        // hna kanvalidiw data <dialna
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'method_payment' => 'required|in:card,cod',
            'status' => 'required|in:new,shipped,delivered,canceled',
            'products_id' => 'required|array',
            'products_id.*' => 'required|exists:products,id',
        ]);

        // fi halat manjhatch validation
        if ($validator->fails()) {
            return back()
                ->withErrors($validator);
        }


        // ANjobo data 
        $data = $request->all();

        $totals = 0;
        $products_id = $data['products_id'];

        foreach ($products_id as $prodId) {

            $product  = Product::find($prodId);
            $totals = $totals + $product->price;
        }


        $data['sub_total'] = $totals;
        $data['total'] = $totals;

        // anhatoha f pwlabase de donne

        $order = \App\Models\Order::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'method_payment' => $data['method_payment'],
            'status' => $data['status'],
            'total' => $data['total'],
            'sub_total' => $data['sub_total'],
        ]);

        foreach ($products_id as $prodId) {
            

            $product  = Product::find($prodId);
            $totals = $totals + $product->price;

            $order->products()->attach($prodId, [
                'qty' => 1,
                'price' => $product->price,
            ]);

        }


        return redirect()->route('index-dial-orders');
    }


    public function edit($order_id)
    {
        $productLiModif = \App\Models\Order::where('id', '=', $order_id)->first();
        return view('orders.edit')->with('productLiModif', $productLiModif);
    }

    public function update(Request $request)
    {
        // kanhet data hnaya lijatni men HTML
        $data = $request->all();

        $order_id = $data['productId'];

        \App\Models\Order::where('id', '=', $order_id)->update([
            'name' => $data['name'],
            'price' => $data['price'],
            'description' => $data['description'],
        ]);


        return redirect()->route('index-dial-orders');
    }


    public function delete($order_id)
    {

        \App\Models\Order::destroy($order_id);

        return redirect()->route('index-dial-orders');
    }
}
