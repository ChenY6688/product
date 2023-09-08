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
        //$user= Auth::user();
        $user = $request->user();
        return view('userSetting', compact('user'));
    }

    public function user_info_update(Request $request)
    {
        // 方法一
        $request->validate([
            'name' => 'required|max:255',
        ],[
            'name.required' =>'必填',
            'name.max' =>'字數過長',
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
        dd($request->all());
        return view('test');
    }
    public function fetchTest(Request $request)
    {
        dd($request->all());
    }
}
