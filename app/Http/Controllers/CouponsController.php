<?php

namespace App\Http\Controllers;

use App\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function store(Request $request)
    {
       $coupon = Coupon::where('code', $request->coupon_code)->first();
       if (!$coupon) {
           return redirect()->route('cart')->withErrors('Invalid promo-code. Please try again.');
       }

       session()->put('coupon', [
           'name' => $coupon->code,
           'discount' => $coupon->discount(Cart::subtotal()),
       ]);

        return redirect()->route('cart')->with('successMsg', 'Coupon has been applied!');
    }

}
