<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::get();
        return view('backend.categories.index', compact('categories'));
    }

    public function create(){
        $categories = Category::get();
        return view('backend.categories.create', compact('categories'));
    }
    public function store(Request $request){
        $category = new Category();
        $category->title = $request['title'];
        $category->group = $request['group'];
        $category->description = $request['description'];
        $category->id_parent = $request['id_parent'];
        $category->save();
        
        return redirect()->route('backend.categories.create');
    }

    public function edit(Category $category)
    {
        return view('backend.categories.edit', compact('category'));
    }

    public function update(Request $request,Category $category)
    {
        $category->title = $request['title'];
        $category->group = $request['group'];
        $category->description = $request['description'];
        $category->id_parent = $request['id_parent'];
        $category->save();

        return redirect()->route('backend.categories.index');
    }
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('backend.categories.index');
    }
    

}
