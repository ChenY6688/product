@extends('templates.indexTemplate')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shopping-car.css') }}">
@endsection
@section('main')
<div class="container">
    <div class="row">
        <div class="thank col-12">
            <div class="d-flex justify-content-center">
                <h1>感謝您的購買~~~</h1>
            </div>
        </div>
        <div class="d-flex col-12 justify-content-around">
            <a href=""><button class="btn border">查看訂單</button></a>
            <a href="{{ route('front.index') }}"><button class="btn border">回首頁</button></a>
        </div>
    </div>
</div>
@endsection
