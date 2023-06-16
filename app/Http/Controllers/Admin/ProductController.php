<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('backend.products.index', compact('products'));
    }

    public function create(){
        $categories = Category::get();
        return view('backend.products.create', compact('categories'));
    }

    public function store(Request $request){
        $product = new Product();
        $product->category_id = $request['category_id'];
        $product->name = $request['name'];
        $product->price = $request['price'];
        $product->quantity = $request['quantity'];
        $product->unit = $request['unit'];
        $product->image = $request['image'];
        $product->save();
        
        return redirect()->back()->withInput(['category_id' => $request->input('category_id')]);
    }
}
