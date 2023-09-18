<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('Products/index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('Products/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string',
            'price'=> 'required|numeric',
            'description' => 'nullable|string'

        ]);
        $product = new Product();
        $product->name = $validateData('name');
        $product->price = $validateData('price');
        $product->description = $validateData('description');
        $product->save();

        return redirect()->route('products/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Product::find('$id');

        return view('product/show',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);

        return view('product/edit',compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);

        $validateData = $request->validate([
            'name' => 'required|string',
            'price'=> 'required|numeric'
        ]);

        $product->name = $validateData['name'];
        $product->price = $validateData['price'];
        $product->save();

        return redirect()->route('products/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
