<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsControllers extends Controller
{
    public function index(){
        return view('products/list');
    }

    public function getProduct($id){
        return "Get item" . $id;
    }

    public function updateProduct($id){
        return "Update category" . $id;
    }

    public function addProduct(){
        // return "add PRD";
        return view('Products/form');
    }
    public function removeProduct($id){
        return "Remove category" .$id;
    }
    public function handleProduct(){
        return "Them Category";
    }
}
