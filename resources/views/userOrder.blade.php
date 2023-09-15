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

            {{-- // status
            // 1 =>未繳費
            // 2 =>已繳費
            // 3 =>已出貨
            // 4 => 完成訂單
            5 =>取消訂單 --}}

            <tbody>
                @foreach ($orders as $key => $item)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $item->menu }}</td>
                        <td>{{ $item->total }}</td>
                        <td>{{ $item->created_at->format('Y/m/d') }}</td>
                        <td>
                            @if ($item->status == 1)
                                未繳費
                            @elseif ($item->status == 2)
                                已繳費
                            @elseif ($item->status == 3)
                                已出貨
                            @elseif ($item->status == 4)
                                完成訂單
                            @else
                                取消訂單
                            @endif
                            <a href=" {{ route('user.order.detail', ['oder_forms_id' => $item->id]) }}">
                                <button type="button" class="btn btn-primary">查看</button>
                            </a>
                            @if ($item->status == 1)
                                <form action="{{ route('user.order.backToPay') }}" method="POST">
                                    @csrf
                                    <input name="orderId" type="hidden" value="{{ $item->id }}">
                                    <button type="submit" class="btn btn-primary">前往繳費</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@if (Session::has('msg'))
    @section('js')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire('{{ Session::get('msg') }}');
        </script>
    @endsection

@endif
