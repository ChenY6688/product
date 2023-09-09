<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('test2', compact('phone','name'));
    }

    public function fetchTest(Request $request)
    {
        dd($request->all());
    }
}
