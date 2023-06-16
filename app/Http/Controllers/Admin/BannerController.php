<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Models\Category;

class BannerController extends Controller
{
    public function create(){
        $categories = Category::get();
        return view('backend.banners.create', compact('categories'));
    }

    public function store(Request $request){
        $banner = new Banner();
        $banner->category_id = $request['category_id'];
       
        $banner->image = $request['image'];
        $banner->save();
        
        return redirect()->route('backend.banners.create');
    }
}
