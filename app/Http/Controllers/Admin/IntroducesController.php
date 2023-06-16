<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Introduce;
use Illuminate\Http\Request;

class IntroducesController extends Controller
{
    public function create(){
        $categories = Category::get();
        return view('backend.introduces.create', compact('categories'));
    }

    public function store(Request $request){
        $introduces = new Introduce();
        $introduces->category_id = $request['category_id'];
       
        $introduces->image = $request['image'];
        $introduces->save();
        
        return redirect()->back()->withInput(['category_id' => $request->input('category_id')]);
    }
}
