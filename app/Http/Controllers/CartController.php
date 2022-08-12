<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $tax = Cart::tax() / 100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $newSubtotal = (Cart::subtotal() - $discount);
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal + $newTax;
        return view('shops.cart', compact('discount', 'newSubtotal', 'newTax', 'newTotal'));
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
