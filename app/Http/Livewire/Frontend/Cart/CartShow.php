<?php

namespace App\Http\Livewire\Frontend\Cart;

use App\Models\Cart;
use Livewire\Component;

class CartShow extends Component
{

    public function removeCartItem(int $CartId){

        $cartRemoveData = Cart::where('user_id', auth()->user()->id)->where('id', $CartId)->first();
        if($cartRemoveData){
            $cartRemoveData->delete();
        }
    }
    public function render()
    {
        $carts = Cart::with('product')->where('user_id', Auth()->user()->id)->get();

        return view('livewire.frontend.cart.cart-show' , compact('carts'));
    }
}
