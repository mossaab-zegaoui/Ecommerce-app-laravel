<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    public function index()
    {
        $tax = Cart::tax();
        $discount = session()->get('coupon')['discount'] ?? 0;
        $newSubtotal = (Cart::subtotal() - $discount);
        $newTax = $newSubtotal * 0.21;
        $newTotal = $newSubtotal * (1 + $newTax);
        return view('checkout', compact('discount', 'newSubtotal', 'newTax', 'newTotal'));
    }
    public function store(Request $request)
    {

        try {
            Stripe::setApiKey('sk_test_51LHOdgFbnAlU9rlnUgjJ3AGKTZ7p86N3WyyRZtqya3T3LpDwS8SKr9xYjfEj5HJ4vKZ9CwttDOw3sw2nrnXkYDAU00rWSBPkQA');
            $token = $_POST['stripeToken'];
            $charge = Charge::create([
                'amount' => Cart::total() * 100,
                'currency' => 'usd',
                'description' => 'Example charge',
                'source' => $token,
            ]);
            return back()->with('message', 'thanks for your purchase');
        } catch (Exception $e) {
            return back()->with('message', 'Error');
        }
    }
    public function destroy(Request $request)
    {
        $request->session()->flush();
        return view('index');
    }
}
