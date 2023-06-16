<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Product_card;
use Illuminate\Http\Request;

class Product_cardController extends Controller
{
    public function create(){
        $cards = Card::get();
        return view('backend.product_cards.create', compact('cards'));
    }

    public function store(Request $request){
        $product_cards = new Product_card();
        $product_cards->card_id = $request['card_id'];
        $product_cards->price = $request['price'];
        $product_cards->image = $request['image'];
        $product_cards->save();
        
        return redirect()->back()->withInput(['card_id' => $request->input('card_id')]);
    }
}
