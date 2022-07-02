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
        $products = Product::paginate(12);
        return view('shops.index', compact('products'));
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
}
