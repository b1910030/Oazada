<?php

namespace App\Http\Controllers;

use App\Models\Gallery_sub_category;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Banner;
use App\Models\Card;
use App\Models\Introduce;
use App\Models\Product_card;
use App\Models\Source_category;
use App\Models\Sub_category;
use Illuminate\Support\Facades\Auth;

class FontendController extends Controller
{
    public function product(Category $category){
        $categories = Category::get();

        $banners = Banner::where('category_id', $category->id)->get();

        $introduces = Introduce::where('category_id', $category->id)->get();

        $products = Product::where('category_id', $category->id)->get();

        $source_categories = Source_category::where('category_id', $category->id)->get();

        $sub_categories = Sub_category::where('category_id', $category->id)->get();
        $sub_category_ids = $sub_categories->pluck('id');

        $gallery_sub_categories = Gallery_sub_category::whereIn('sub_category_id', $sub_category_ids)->get();

        $cards = Card::where('category_id', $category->id)->get();
        $card_ids = $cards->pluck('id');

        $product_cards = Product_card::whereIn('card_id', $card_ids)->get();



        return view('fontend.product', compact('products', 'categories', 'banners', 'introduces' , 'source_categories', 'sub_categories' , 'gallery_sub_categories',
            'cards', 'product_cards'
        ));
    }

    public function detail(Product $product){
        $categories = Category::get();
        return view('fontend.detail', compact('product' ,'categories'));
    }

    public function health(){

        $categories = Category::get();
        $product1s = Product::where('category_id', 20)->take(9)->get();
        $product2s = Product::where('category_id', 20)->take(6)->inRandomOrder()->get();
        $product3s = Product::where('category_id', 20)->take(8)->inRandomOrder()->get();
        $product4s = Product::where('category_id', 20)->take(8)->inRandomOrder()->get();
        $product5s = Product::where('category_id', 20)->take(30)->inRandomOrder()->get();

        return view('fontend.health', compact('categories', 'product1s', 
                    'product2s', 'product3s', 'product4s', 'product5s'
        ));
    }

    public function exhibit(){

        $categories = Category::get();
        $product1s = Product::where('category_id', 20)->take(9)->get();
        $product2s = Product::where('category_id', 20)->take(6)->inRandomOrder()->get();
        $product3s = Product::where('category_id', 20)->take(8)->inRandomOrder()->get();
        $product4s = Product::where('category_id', 20)->take(8)->inRandomOrder()->get();
        $product5s = Product::where('category_id', 20)->take(30)->inRandomOrder()->get();

        return view('fontend.exhibit', compact('categories', 'product1s', 
                    'product2s', 'product3s', 'product4s', 'product5s'
        ));
    }

    public function resultsearch(Request $request){

        $categories = Category::get();

        $products = Product::when($request->name !=null, function ($q) use ($request) {
            return  $q->where('name','LIKE','%'.$request->name.'%');
        })->paginate(10);

        return view('fontend.result_search', compact('categories','products'));
    }
}
