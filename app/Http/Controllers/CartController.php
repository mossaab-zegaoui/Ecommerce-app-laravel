<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $product = Product::findOrFail($request->input('product_id'));
        Cart::add(
            $product->id,
            $product->name,
            $request->input('quantity'),
            $product->price_ht
        );
        return  redirect('/shops/'. $product->id .'/product')->with('message', 'Order has been added to your cart');
    }
}
