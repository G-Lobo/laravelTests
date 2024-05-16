<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $products = new Product();

        $products->name = $request->name;
        $products->content = $request->content;
        $products->price = $request->price;

        $products->save();

        return to_route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $products)
    {
        $product = Product::findOrFail($products->id);

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $products)
    {
        $product = Product::findOrFail($products->id);

        return view('products.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $products)
    {
        $data = $request->all();

        Product::findOrfail($products->id)->update($data);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $products)
    {
        Product::findOrFail($products->id)->delete();

        return redirect()->back();
    }
}
