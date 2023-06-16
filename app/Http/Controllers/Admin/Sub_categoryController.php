<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Sub_category;

class Sub_categoryController extends Controller
{
    public function create(){
        $categories = Category::get();
        return view('backend.sub_categories.create', compact('categories'));
    }

    public function store(Request $request){
        $sub_categories = new Sub_category();
        $sub_categories->category_id = $request['category_id'];
        $sub_categories->name = $request['name'];
        $sub_categories->save();
        
        return redirect()->back()->withInput(['category_id' => $request->input('category_id')]);

    }
}
