@extends('templates.template')

@section('head')
    <style>
        .pagination {
            justify-content: center;
        }
    </style>
@endsection

@section('main')
    <div class="container">
        <!-- row -->
        <div class="row mb-8">
            <div class="col-md-12">
                <!-- page header -->
                <div>
                    <h2>Product List</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order List</li>
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-12 mb-5">
                <!-- card -->
                <div class="card h-100 card-lg">
                    <div class=" p-6 ">
                        <div class="row justify-content-between ">
                            <div class="col-md-6 col-12 mb-2 mb-md-0 flex-row">
                                <!-- form -->
                                <form action="{{ route('product.index') }}" method="GET" class="d-flex column-gap-3" role="search">
                                    <input class="form-control" name="keyword" type="text" placeholder="搜尋名稱或描述" aria-label="Search" value="{{ $keyword }}">
                                    <button type="submit" class="btn btn-success flex-shrink-0">搜尋</button>
                                </form>
                                <a href="{{ route('product.create') }}" class="btn btn-primary">新增產品按鈕
                                    {{-- <button href="/Addcartlist" class="btn btn-primary"></button> --}}
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-12">
                                <!-- select -->
                                <select class="form-select">
                                    <option selected="">Status</option>
                                    <option value="Success">Success</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Cancel">Cancel</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- card body -->
                    <div class="card-body p-0">
                        <!-- table responsive -->
                        <div class="table-responsive">
                            <table
                                class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                                <thead class="bg-light">
                                    <tr>
                                        <th>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    value="" id="checkAll">
                                                <label class="form-check-label" for="checkAll">

                                                </label>
                                            </div>
                                        </th>
                                        <th>Image</th>
                                        <th>產品名稱</th>
                                        <th>產品描述</th>
                                        <th>新增日期</th>
                                        {{-- <th></th> --}}
                                        <th>顯示</th>
                                        <th>產品價格</th>
                                        <th>功能</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="" id="orderOne">
                                                    <label class="form-check-label" for="orderOne">
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"> <img
                                                        src="{{ asset($product->img_path) }}"
                                                        alt="" class="icon-shape icon-md"></a>
                                            </td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->desc }}</td>
                                            <td>{{ $product->created_at->format('Y/m/d') }}</td>
                                            <td>
                                                @if ($product->status === 1)
                                                    <span class="badge bg-light-primary text-dark-primary">顯示</span>
                                                @else
                                                    <span class="badge bg-danger">不顯示</span>
                                                @endif
                                            </td>
                                            <td>${{ $product->price }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <div>
                                                        <form action="{{ route('product.delete', ['id' => $product->id]) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="dropdown-item" type="submit">
                                                                <i class="fa-regular fa-trash-can me-3"></i>
                                                                刪除
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div><a class="dropdown-item" href="{{ route('product.edit', ['id' => $product->id]) }}">
                                                        <i class="fa-light fa-pen-to-square me-3"></i>編輯</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{ $products->links() }}
                    {{-- <div class="border-top d-md-flex justify-content-between align-items-center p-6">
                        <span>Showing 1 to 8 of 12 entries</span>
                        <nav class="mt-2 mt-md-0">
                            <ul class="pagination mb-0 ">
                                <li class="page-item disabled"><a class="page-link "
                                        href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div> --}}
                </div>

            </div>

        </div>
    </div>
@endsection
