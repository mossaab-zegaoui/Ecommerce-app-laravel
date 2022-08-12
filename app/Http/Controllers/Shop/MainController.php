<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        $products = Product::paginate(12);
        return view('shops.index', compact('products', 'categories'));
    }
    public function categories($id)
    {
        $categories = Category::all();
        $products = Product::where('category_id', $id)->paginate(15);
        return view('shops.index', compact('products', 'categories'));
    }
    public function show($id)
    {
        $product = Product::findorFail($id);
        return view('shops.product', compact('product'));
    }
    public function blog()
    {
        $posts = Post::paginate(6);
        return view('blog', compact('posts'));
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
