<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Order_detail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(User $user){
        
        $categories = Category::get();

        $carts = Cart::with('product')->where('user_id', Auth()->user()->id)->get();

        $total = 0;
        foreach($carts as $cart) {
            $total += $cart->product->price * $cart->quantity;
        }

        return view('fontend.checkout', compact('carts', 'total' ,'categories'));
    }

    public function store(Request $request){

        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->total = $request['total'];
        $order->name = $request['name'];
        $order->email = $request['email'];
        $order->phone = $request['phone'];
        $order->address = $request['address'];

        if($request['payment_method'] == 'paypal'){
            $order->payment_method = 'paypal';
            $order->payment_status = 'paid';
        } else {
            $order->payment_method = 'cod';
            $order->payment_status = 'Unpaid';
        }
        $order->save();

        $carts = Cart::with('product')->where('user_id', Auth()->user()->id)->get();
        foreach($carts as $cart) {
            $order_detail = new Order_detail();
            $order_detail->order_id = $order->id;
            $order_detail->product_id = $cart->product_id;
            $order_detail->quantity = $cart->quantity;
            $order_detail->save();

            $product = Product::find($order_detail->product_id);
            DB::table('products')->where('id', $order_detail->product_id)->update(['quantity'=>$product->quantity - $order_detail->quantity]);
        }

        
        DB::table('carts')->where('user_id', $order->user_id)->delete();
        
        

        return redirect()->back()->with('success', 'Đặt hàng thành công!');
        
    }

    public function detail(User $user){

        $categories = Category::get();

        $orders = Order::where('user_id', Auth()->user()->id)->get();

        $orderdetails = Order_detail::with('product')->get();
        
        
        return view('fontend.orderdetail', compact('categories', 'orders', 'orderdetails'));
    }
}
