<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartExclusiveController extends Controller
{
    public function step01(Request $request)
    {
        // $carts = Cart::with('product')->get();
        $carts = Cart::where('user_id', $request->user()->id)->get();
        $total = 0;
        foreach ($carts as $value) {
            $total +=  $value->product->price * $value->qty;
        }

        return view('mycard.checkout', compact('carts', 'total'));
    }

    public function updateQty(Request $request)
    {
        // dd(123);
        $request->validate([
            'cart_id' => 'required|exists:carts,id',
            'qty' => 'required|numeric|min:1',
        ]);

        $cart = Cart::find($request->cart_id);
        $updateCart =  $cart->update([
            'qty' => $request->qty,
        ]);

        return (object)[
            'code' => $updateCart ? 1 : 0,
            'price' => ($cart->product?->price ?? 0) * $cart->qty,
        ];
    }


    public function step02()
    {
        return view('mycard.checkout-information');
    }
    public function step03()
    {
        return view('mycard.checkout-pay');
    }
    public function step04()
    {
        return view('mycard.checkout-ok');
    }
}
