<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        $products = Product::paginate(12);
        return view('shops.index', compact('products','categories'));
    }

    public function show($id)
    {
        $product = Product::findorFail($id);
        return view('shops.product', compact('product'));
    }

    public function categories($id)
    {
        $products = Product::all();
        return view('shops.categories', compact('products'));
    }
    public function blog()
    {
        return view('blog');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
}
