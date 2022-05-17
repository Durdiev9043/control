<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products=Product::all();
        return view('admin.product.index',['products'=>$products]);
    }


    public function create()
    {
        return view('admin.product.create');
    }


    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('admin.product.index');

    }


    public function show($id)
    {
        //
    }


    public function edit(Product $product)
    {
        return view('admin.product.edit',['product'=>$product]);
    }


    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('admin.product.index');
    }


    public function destroy($id)
    {
        //
    }
}
