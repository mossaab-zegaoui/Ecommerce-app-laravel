<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CouponsController extends Controller
{

    public function store(Request $request)
    {

        $coupon = Coupon::where('code', $request->code)->first();
        if (!$coupon) {
            return back()->with('Error', 'Coupon invalide ! Please try again');
        }

        session()->put('coupon', [
            'name' => $coupon->code,
            'discount' => $coupon->discount(Cart::subtotal()),
        ]);
        return back()->with('message', 'Coupon applied');
    }
    public function destroy()
    {
        session()->forget('coupon');
        return  back()->with('message', 'coupon removed');
    }
}
