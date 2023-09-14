@extends('templates.indexTemplate')

@section('main')
    <h1>訂單詳細資訊</h1>
    <div>
        <h3>訂單內的產品</h3>
        @if (!$order)
            <div>查無資料</div>
        @else
            {{-- <h3>訂單內的產品</h3> --}}
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">圖片</th>
                        <th scope="col">名稱</th>
                        <th scope="col">單價</th>
                        <th scope="col">購買數量</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->productoder as $key => $item)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td><img src="{{ $item->image }}" alt="" style="height: 100px;"></td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->qty }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                <h3>收件資訊</h3>
                <div>收件者姓名:{{ $order->name }}</div>
                <div>收件地址:{{ $order->address }}</div>
                <div>收件日期:{{ str_replace('-', '/', $order->date) }}</div>
                <div>收件者電話:{{ $order->phone }}</div>
                <div>訂單備註:{{ $order->menu }}</div>
            </div>
        @endif
    </div>
@endsection
