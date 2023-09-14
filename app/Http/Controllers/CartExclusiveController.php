<?php

namespace App\Http\Controllers;

use App\Mail\OrderCreated;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Productoder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\FuncCall;

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

    public function deleteCart(Request $request)
    {
        $request->validate([
            'cart_id' => 'required|exists:carts,id'
        ]);
        $cart = Cart::find($request->cart_id)->delete();

        $carts = Cart::where('user_id', $request->user()->id)->get();
        $total = 0;
        foreach ($carts as $value) {
            # code...
            $total += $value->product->price * $value->qty;
        }

        return (object)[
            'code' => $cart ? 1 : 0,
            'id' => $request->cart_id,
            'total' => $total,
        ];
    }

    public function step02(Request $request)
    {
        $name = $request->session()->get('name', '');
        $addr = $request->session()->get('addr', '');
        $date = $request->session()->get('date', '');
        $phone = $request->session()->get('phone', '');
        $menu = $request->session()->get('menu', '');
        return view('mycard.checkout-information', compact('name', 'addr', 'date', 'phone', 'menu'));
    }

    public function step02_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'addr' => 'required',
            'date' => 'required',
            'phone' => 'required',
        ]);
        $request->session()->put('name', $request->name);
        $request->session()->put('addr', $request->addr);
        $request->session()->put('date', $request->date);
        $request->session()->put('phone', $request->phone);
        $request->session()->put('menu', $request->menu);
        return redirect(route('cart.step03'));
    }

    public function step03(Request $request)
    {

        return view('mycard.checkout-pay');
    }

    public function step03_store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'pay' => 'required|numeric',
        ]);

        $itembuys = Cart::where('user_id', $request->user()->id)->get();

        $todayOnerCount = Order::whereDate('created_at', today())->get()->count();

        $string = 'ABCDEFGHIJKLMNOPQRSTUVWZabcdefghijklmnopqrstuvwxyz';
        $shuffle = str_shuffle($string);

        $form = Order::create([
            'order_id' => 'HW' . date("Ymd") . str_pad($todayOnerCount, 4, '0', STR_PAD_LEFT) . substr($shuffle, 0, 3),
            'user_id' => $request->user()->id,
            'name' => session()->get('name'),
            'address' => session()->get('addr'),
            'date' => session()->get('date'),
            'phone' => session()->get('phone'),
            'menu' => session()->get('menu'),
            'pay' => $request->pay,
        ]);

        $total = 0;
        foreach ($itembuys as $value) {
            $total += $value->product->price * $value->qty;
            Productoder::create([
                'form_id' => $form->id,
                'qty' => $value->qty,
                'price' => $value->product->price,
                'name' => $value->product->name,
                'image' => $value->product->img_path,
                'desc' => $value->product->desc,
            ]);

            $value->delete();
        }

        $form->update([
            'total' => $total,
        ]);

        session()->forget(['name', 'addr', 'date', 'phone', 'menu']);

        // $data = [
        //     'name' => $request->user()->name,
        //     'order_id' => $form->order_id,
        //     'total' => $total,
        // ];
        // 信箱
        // Mail::to($request->user()->email)->send(new OrderCreated($data));
        if ($request->pay == 1) {
            return redirect(route('cart.step04'));
        } else {
            return redirect(route('ecpay', ['order_id' => $form->id]));
        }
    }

    public function step04()
    {
        return view('mycard.checkout-ok');
    }
}
