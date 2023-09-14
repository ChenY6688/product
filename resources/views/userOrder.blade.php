@extends('templates.indexTemplate')

@section('main')
    <div class="container">
        <h1>訂單資訊</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">備註</th>
                    <th scope="col">訂單金額</th>
                    <th scope="col">訂單成立時間</th>
                    <th scope="col">操作</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($orders as $key => $item)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $item->menu }}</td>
                        <td>{{ $item->total }}</td>
                        <td>{{ $item->created_at->format('Y/m/d') }}</td>
                        <td>
                            <a href=" {{ route('user.order.detail', ['oder_forms_id' => $item->id]) }}">
                                <button type="button" class="btn btn-primary">查看</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
