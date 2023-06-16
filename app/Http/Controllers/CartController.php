<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(User $user){
        $carts = Cart::with('product')->where('user_id', Auth()->user()->id)->get();
        $categories = Category::get();

        $total = 0;
        foreach($carts as $cart) {
            $total += $cart->product->price * $cart->quantity;
        }
        
        return view('fontend.cart', compact('categories', 'carts', 'total'));
    }

    public function store(Product $product){
        
        $user = Auth()->user();
        $cart = Cart::where('user_id', $user->id)->where('product_id', $product->id)->first();
        if($cart){
            $cart->quantity += 1;
            $cart->save();
            return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
        } else{
            $cart = new Cart();
            $cart->user_id = $user->id;
            $cart->product_id = $product->id;
            $cart->quantity = 1;
            $cart->save();
        }

        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }

    public function update(Request $request, Cart $cart){

        $cart->quantity = $request['quantity'];
        $cart->save();

        return redirect()->back()->with('success', 'Số lượng sản phẩm đẫ được cập nhật thành công!');
    }

    public function remove(Cart $cart){

        $cart->delete();

        return redirect()->back()->with('success', 'Sản phẩm đã được xóa!');
    }
}
