<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\Gallery_sub_categoryController;
use App\Http\Controllers\Admin\IntroducesController;
use App\Http\Controllers\Admin\Product_cardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\Source_categoryController;
use App\Http\Controllers\Admin\Sub_categoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\OrderController;
use App\Models\Category;
use App\Models\Gallery_sub_category;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $appreciate1s = Product::inRandomOrder()->take(4)->get();
    $appreciate2s = Product::inRandomOrder()->take(4)->get();
    $appreciate3s = Product::inRandomOrder()->take(4)->get();
    $categorie1s = Category::inRandomOrder()->take(8)->get();
    $products = Product::inRandomOrder()->take(50)->get();
    $categories = Category::get();
    return view('home', compact('categories', 'appreciate1s', 'appreciate2s', 'appreciate3s', 'categorie1s','products'));
});

// public function header(){
//     $categories = Category::get();
//     return view('partials.header', compact('categories'));
// }

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'signin'])->name('signin');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'create'])->name('register');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/product/{category:id}', [FontendController::class, 'product'])->name('product');
Route::get('/detail/{product:id}', [FontendController::class, 'detail'])->name('detail');

// Health
Route::get('/health', [FontendController::class, 'health'])->name('health');

// exhibit
Route::get('/exhibit', [FontendController::class, 'exhibit'])->name('exhibit');

// Cart
Route::get('/cart/{user:id}', [CartController::class, 'index'])->name('cart.index');

// Result_search
Route::get('/resultsearch', [FontendController::class, 'resultsearch'])->name('resultsearch');

Route::post('/cart/add/{product:id}', [CartController::class, 'store'])->name('cart.add');
Route::post('/cart/update/{cart:id}', [CartController::class, 'update'])->name('cart.update');
Route::post('/cart/delete/{cart:id}', [CartController::class, 'remove'])->name('cart.delete');

// Checkout
Route::get('/checkout/{user:id}', [OrderController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [OrderController::class, 'store'])->name('checkout.update');

// Order Detail
Route::get('/detail/order/{user:id}', [OrderController::class, 'detail'])->name('order.detail');


// Admin: Dashboard
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('backend.dashboard.index');
// Category
Route::get('/admin/category/add', [CategoryController::class, 'create'])->name('backend.categories.create');
Route::get('/admin/category/index', [CategoryController::class, 'index'])->name('backend.categories.index');
Route::get('/admin/category/edit/{category:id}', [CategoryController::class, 'edit'])->name('backend.categories.edit');
Route::post('/admin/category/add', [CategoryController::class, 'store'])->name('store');
Route::post('/admin/category/destroy', [CategoryController::class, 'destroy'])->name('backend.categories.destroy');
Route::put('/admin/category/update', [CategoryController::class, 'update'])->name('backend.categories.update');

//Product
Route::get('/admin/product/index', [ProductController::class, 'index'])->name('backend.products.index');
Route::get('/admin/product/add', [ProductController::class, 'create'])->name('backend.products.create');
Route::post('/admin/product/store', [ProductController::class, 'store'])->name('backend.products.store');

//Banner
Route::get('/admin/banner/add', [BannerController::class, 'create'])->name('backend.banners.create');
Route::post('/admin/banner/store', [BannerController::class, 'store'])->name('backend.banners.store');

//Introduce
Route::get('/admin/introduce/add', [IntroducesController::class, 'create'])->name('backend.introduces.create');
Route::post('/admin/introduce/store', [IntroducesController::class, 'store'])->name('backend.introduces.store');


// Source_category
Route::get('/admin/source_category/add', [Source_categoryController::class, 'create'])->name('backend.source_category.create');
Route::post('/admin/source_category/store', [Source_categoryController::class, 'store'])->name('backend.source_category.store');

// Sub_category
Route::get('/admin/sub_category/add', [Sub_categoryController::class, 'create'])->name('backend.sub_categories.create');
Route::post('/admin/sub_category/store', [Sub_categoryController::class, 'store'])->name('backend.sub_categories.store');

// Gallery_sub_category
Route::get('/admin/gallery_sub_category/add', [Gallery_sub_categoryController::class, 'create'])->name('backend.gallery_sub_categories.create');
Route::post('/admin/gallery_sub_category/store', [Gallery_sub_categoryController::class, 'store'])->name('backend.gallery_sub_categories.store');

// Card
Route::get('/admin/card/add', [CardController::class, 'create'])->name('backend.cards.create');
Route::post('/admin/card/store', [CardController::class, 'store'])->name('backend.cards.store');

// Product_card
Route::get('/admin/product_card/add', [Product_cardController::class, 'create'])->name('backend.product_cards.create');
Route::post('/admin/product_card/store', [Product_cardController::class, 'store'])->name('backend.product_cards.store');



