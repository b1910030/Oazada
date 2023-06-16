<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Source_category;

class Source_categoryController extends Controller
{
    public function create(){
        $categories = Category::get();
        return view('backend.source_category.create', compact('categories'));
    }

    public function store(Request $request){
        $source_categories = new Source_category();
        $source_categories->category_id = $request['category_id'];
        $source_categories->name = $request['name'];
        $source_categories->image = $request['image'];
        $source_categories->save();
        
        // return redirect()->route('backend.source_category.create');
        return redirect()->back()->withInput(['category_id' => $request->input('category_id')]);

    }
}
