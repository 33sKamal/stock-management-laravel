<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class StockController extends Controller
{


    public function index()
    {
        $stocks = \App\Models\Stock::all();
        return view('stocks.index')->with('stocks', $stocks);
    }



    public function edit($stock_id)
    {

        $stock = \App\Models\Stock::where('id', '=', $stock_id)->first();

        $products = \App\Models\Product::all();

        return view('stocks.edit')->with('stock', $stock)->with('products', $products);
    }



    public function update($stock_id, Request $request)
    {

        // validiw data dialna
        $validator = Validator::make($request->all(), [
            'secteur' => 'required|min:10|max:100',
            'case' => 'required',
            'qty' => 'required|numeric|min:10|max:100',
            'product_id' => 'required|exists:products,id',
        ]);

        // fi halat manjhatch validation
        if ($validator->fails()) {
            return back()
                ->withErrors($validator);
        }

        // ANjobo data 
        $data = $request->all();

        // nstockiw data dialana f la base de donné
        $stock = \App\Models\Stock::where('id', '=', $stock_id)->first();
      
        $stock->update([
            'secteur' => $data['secteur'],
            'case' => $data['case'],
            'qty' => $data['qty'],
            'product_id' => $data['product_id'],
        ]);

        $stocks = \App\Models\Stock::all();

        return view('stocks.index')->with('stocks', $stocks);
    }



    public function create()
    {
        $products = \App\Models\Product::all();

        return view('stocks.create')->with('products', $products);
    }

    public function store(Request $request)
    {

        // validiw data dialna
        $validator = Validator::make($request->all(), [
            'secteur' => 'required',
            'case' => 'required',
            'qty' => 'required|numeric',
            'product_id' => 'required|exists:products,id',
        ]);

        // fi halat manjhatch validation
        if ($validator->fails()) {
            return back()
                ->withErrors($validator);
        }


        // ANjobo data 
        $data = $request->all();

        // nstockiw data dialana f la base de donné

        \App\Models\Stock::create([
            'secteur' => $data['secteur'],
            'case' => $data['case'],
            'qty' => $data['qty'],
            'product_id' => $data['product_id'],

        ]);

        // nraj3o la page index

        $stocks = \App\Models\Stock::all();

        return view('stocks.index')->with('stocks', $stocks);
    }
}
