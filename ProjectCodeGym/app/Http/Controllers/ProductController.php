<?php

namespace App\Http\Controllers;
use Exception;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::All();
        return view('products.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/products/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { $input = $request->validate([
        'name' => 'required|min:5',
        'detail' => 'required|min:10',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ], [
        'name.required' => 'name không được rỗng',
        'name.min' => 'name phải lơn hơn 5 ký tự',
        'detail.required' => 'detail không được rỗng',
        'detail.min' => 'detail phải lơn hơn 10 ký tự',
    ]);
    if ($image = $request->file('image')) {
        $path = 'image/';
        $profileImage = date('YdmHis') . "." . $image->getClientOriginalExtension();
        $image->move($path, $profileImage);
        $input['image'] = $profileImage;
    }

    Products::create($input);

    return redirect()->route('product.index')->with('msg', 'Product created success!!');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Products::find($id);
        return view('products/show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $product = Products::find($id);
        if(!empty($product))
            return view('products/edit',compact('product'));
        else
            return redirect()->route('product.index')->with('msg', 'Not Found');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
            $request->validate([
                'name' => 'required|min:5',
                'detail' => 'required|min:10',

            ], [
                'name.required' => 'name không được rỗng',
                'detail.required' => 'detail không được rỗng',
            ]);
            $input = $request->all();
            
            if ($image = $request->file('image')) {
                $path = 'image/';
                $profileImage = date('YdmHis') . "." . $image->getClientOriginalExtension();
                $image->move($path, $profileImage);
                $input['image'] = $profileImage;

                $p = Products::find($id);
                $oldImagePath = 'image/' . $p->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $product =Products::findOrFail($id);
            $product->update($input);
            return redirect()->route('product.index')->with('msg', 'Product updated success!!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Products::find($id)->delete();
        return redirect()->route('product.index')->with('msg','Product delete success!!');
    }
}
