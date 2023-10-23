<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\Object_;

class FrontController extends Controller
{
    public function index()
    {
        // status 
        $products = Product::where('status', 1)->get();
        return view('welcome', compact('products'));
    }

    public function user_info(Request $request)
    {
        // 法一
        //$user= Auth::user();
        // 法二
        $user = $request->user();
        return view('userSetting', compact('user'));
    }

    public function user_info_update(Request $request)
    {
        // 方法一
        $request->validate([
            'name' => 'required|max:255',
        ], [
            'name.required' => '必填',
            'name.max' => '字數過長',
        ]);

        // 方法二
        // $validator = Validator::make($request->all(),[
        //     'name' => 'required|max:255',
        // ]);

        // if($validator->fails()){
        //    return redirect(route('user.info'))->withErrors(['nameError' =>'帳號名稱過長']);
        // };

        $user = $request->user();
        $user->update([
            'name' => $request->name,
        ]);
        return redirect(route('user.info'));
    }




    public function test(Request $request)
    {
        // // 取得session中key的資料(參數1=>自行設定的key)
        // $hasBeen = $request->session()->get('mytest','沒有去過');
        // $request->session()->forget('mytest');
        $phone =  $request->session()->get('form_phone', '');
        $name =  $request->session()->get('form_name', '');
        return view('test', compact('phone', 'name'));
    }

    public function step1_store(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'name' => 'required',
        ]);
        $request->session()->put('form_phone', $request->phone);
        $request->session()->put('form_name', $request->name);
        return redirect(route('test.step2'));
    }

    public function test2(Request $request)
    {
        // $request->session()->put('mytest', '曾經到過step2');
        $phone = $request->session()->get('form_phone', '');
        $name = $request->session()->get('form_name', '');
        return view('test2', compact('phone', 'name'));
    }

    public function fetchTest(Request $request)
    {
        dd($request->all());
    }

    public function product()
    {
        $products = Product::where('status', 1)->get();
        return view('frontProduct', compact('products'));
    }

    public function add_cart(Request $request)
    {
        $request->validate([
            'qty' => 'required|min:1|numeric',
            'product_id' => 'required|exists:products,id|numeric',
        ]);

        // 寫法一
        $oddCart = Cart::where('user_id', $request->user()->id)->where('product_id', $request->product_id)->first();
        if ($oddCart) {
            $cart = $oddCart->update([
                'qty' => $oddCart->qty + $request->qty,
            ]);
        } else {
            $cart = Cart::create([
                'product_id' => $request->product_id,
                'qty' => $request->qty,
                'user_id' => $request->user()->id,
            ]);
        }

        // 寫法二
        // Cart::updateOrCreate([
        //     'user_id' => $request->user()->id,
        //     'product_id' => $request->product_id,
        // ],[
        //     'qty' =>
        // ]);

        return (object)[
            'code' => $cart ? 1 : 0,
            'product_id' => $request->product_id,
        ];
    }

    public function order_list(Request $request)
    {
        $user = $request->user();

        $orders = Order::where('user_id', $user->id)->orderBy('id', 'desc')->get();

        return view('userOrder', compact('orders'));
    }

    public function order_detail(Request $request, $oder_forms_id)
    {
        $user = $request->user();
        $order = Order::where('user_id', $user->id)->find($oder_forms_id);
        $date = $order->date;

        return view('orderDrtail', compact('order'));
    }
    public function ec_pay(Request $request, $order_id)
    {
        $user = $request->user();
        $order = Order::where('user_id', $user->id)->find($order_id);

        $string = 'ABCDEFGHIJKLMNOPQRSTUVWZabcdefghijklmnopqrstuvwxyz';
        $shuffle = str_shuffle($string);

        if ($order) {
            $data = (object)[
                'MerchantID' => '3002607',
                'MerchantTradeNo' => $order->order_id . substr($shuffle, 0, 3),
                'MerchantTradeDate' => date('Y/m/d H:i:s'),
                'PaymentType' => 'aio',
                'TotalAmount' => $order->total,
                'TradeDesc' => 'YYDS線上購物網',
                'ItemName' => 'YYDS購物',
                'ReturnURL' => route('ecpay.returnBack'),
                'ChoosePayment' => 'ALL',
                'CheckMacValue' => '',
                'EncryptType' => 1,
                'ClientBackURL' => route('front.index'),
                'IgnorePayment' => 'WebATM#CVS#BARCODE',
            ];
            // 測試用
            $hashKey = 'pwFHCqoQZGmho4w6';
            $hashIv = 'EkRm7iFT261dpevs';

            $step1 = "ChoosePayment={$data->ChoosePayment}&ClientBackURL={$data->ClientBackURL}&EncryptType={$data->EncryptType}&IgnorePayment={$data->IgnorePayment}&ItemName={$data->ItemName}&MerchantID={$data->MerchantID}&MerchantTradeDate={$data->MerchantTradeDate}&MerchantTradeNo={$data->MerchantTradeNo}&PaymentType={$data->PaymentType}&ReturnURL={$data->ReturnURL}&TotalAmount={$data->TotalAmount}&TradeDesc={$data->TradeDesc}";

            $step2 = "HashKey={$hashKey}&{$step1}&HashIV={$hashIv}";
            $step3 = urlencode($step2);
            $step4 = strtolower($step3);
            $step5 = hash('sha256', $step4);
            $step6 = strtoupper($step5);

            $data->CheckMacValue = $step6;

            return view('ecpay', compact('data'));
        } else {
            return redirect('/');
        }
    }

    public function ec_pay_return(Request $request)
    {
        // 綠界打不回來 因為我們是本伺服器
        dd($request->all());
    }

    public function back_to_pay(Request $request)
    {
        $request->validate([
            'orderId' => 'required|exists:orders,id',
        ]);
        $user = $request->user();
        $order = Order::where('user_id', $user->id)->find($request->orderId);
        if ($order) {
            if ($order->status == 1) {
                return redirect(route('ecpay', ['order_id' => $request->orderId]));
            }
        }
        return redirect(route('user.list'))->with(['msg' => '訂單不存在']);
    }
}
