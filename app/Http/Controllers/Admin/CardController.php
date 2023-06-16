<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Category;
use Illuminate\Http\Request;


class CardController extends Controller
{
    public function create(){
        $categories = Category::get();
        return view('backend.cards.create', compact('categories'));
    }

    public function store(Request $request){
        $cards = new Card();
        $cards->category_id = $request['category_id'];
        $cards->name = $request['name'];
        $cards->save();
        
        return redirect()->back()->withInput(['category_id' => $request->input('category_id')]);

    }
}
