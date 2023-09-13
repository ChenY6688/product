@extends('templates.indexTemplate')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shopping-car.css') }}">
@endsection
@section('main')
    <!-- 銀行匯款 -->
    <div class="container mb-5" style="position: relative">
        <form action="{{ route('cart.step03Store') }}" method="POST">
            @csrf
            <!-- Order List標題 -->
            <div class="order">Checkout</div>
            <!-- Dashboard標題 -->
            <div class="text">
                <a href="#" class="green">Dashboard</a>&nbsp&nbsp&nbsp/&nbsp&nbsp&nbspOrder List
            </div>
            <div class="pay-options border" style="position:relative">
                <input name="pay" type="radio" id="bank-checkbox" value="1">
                <label for="bank-checkbox" class="ms-3">
                    <ul>臨櫃匯款</ul>
                    <li>0000-1234456789-123456</li>
                    <li>007第一銀行</li>
                    <li>戶名:洪券雅</li>
                    <li>匯款後請聯繫洪先生(09878787870)</li>
                    <li>請告知帳號後五碼以便對帳</li>
                </label>
            </div>
            <!-- 線上刷卡 -->
            <div class="pay-options border mt-2">
                <input name="pay" type="radio" id="online-creditcard-checkbox" value="2">
                <label for="online-creditcard-checkbox">
                    <ul>線上付款</ul>
                    <li>本站線上付款為綠界金流</li>
                </label>
            </div>
            <!-- 上一步 下一步 -->
            <div class="prev-next-step-group mt-3">
                <a href="{{ route('cart.step02') }}" class="btn btn-primary">上一步</a>
                <button type="submit" class="btn btn-primary">完成訂單</button>
            </div>
        </form>
    </div>
@endsection
