<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('shops.cart');
    }
    public function store(Request $request)
    {
        $product = Product::findOrFail($request->input('product_id'));
        $cartItem = Cart::add(
            [
                'id' => $product->id,
                'name' => $product->description,
                'qty' => $request->input('quantity'),
                'price' => $product->price_ht,
                'weight' => 550,
                'options' =>  ['image' => $product->image]
            ]
        );
        return  back()->with('message', 'Order has been added to your cart');
    }
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success', 'item removed');
    }
}
