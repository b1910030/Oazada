<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery_sub_category;
use App\Models\Sub_category;
use Illuminate\Http\Request;

class Gallery_sub_categoryController extends Controller
{
    public function create(){
        $sub_categories = Sub_category::get();
        $sub_category_ids = $sub_categories->pluck('category_id');
        // $id = Category::where('id',  $sub_category_ids)
        return view('backend.gallery_sub_categories.create', compact('sub_categories', 'sub_category_ids'));
    }

    public function store(Request $request){
        $gallery_sub_categories = new Gallery_sub_category();
        $gallery_sub_categories->sub_category_id = $request['sub_category_id'];
        $gallery_sub_categories->name = $request['name'];
        $gallery_sub_categories->image = $request['image'];
        $gallery_sub_categories->save();
        
        return redirect()->back()->withInput(['sub_category_id' => $request->input('sub_category_id')]);

    }
}
