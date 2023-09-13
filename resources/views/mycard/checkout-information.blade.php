@extends('templates.indexTemplate')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shopping-car.css') }}">
@endsection

@section('main')
    <div class="container p-4 container-md p-5">
        <!-- Order List標題 -->
        <div class="order">Checkout</div>
        <!-- Dashboard標題 -->
        <div class="text">
            <a href="#" class="green">Dashboard</a>&nbsp&nbsp&nbsp/&nbsp&nbsp&nbspOrder List
        </div>
        <div class="container">
            <form action="{{ route('cart.step02Store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="收件者姓名"
                        value="{{ old('name', $name) }}" required>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="addr" placeholder="收件者地址"
                        value="{{ old('addr', $addr) }}" required>
                    <input type="date" class="form-control" id="exampleInputPassword1"name="date"
                        value="{{ old('date', $date) }}" min="{{ substr(today(), 0, 10) }}" required>
                    <input type="tel" class="form-control" id="exampleInputPassword1" name="phone"
                        placeholder="收件者聯絡電話" value="{{ old('phone', $phone) }}" required>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="menu" placeholder="備註"
                        value="{{ old('menu', $menu) }}">
                </div>
                <div class="button w-100">
                    <a href="{{ route('cart.step01') }}" class="btn btn-primary">上一部</a>
                    <button type="submit" class="btn btn-primary">下一步</button>
                </div>
            </form>
        </div>
    @endsection
