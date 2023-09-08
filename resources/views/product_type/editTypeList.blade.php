@extends('Templates.template')

@section('main')
    <div class="container">
        <!-- row -->
        <div class="row mb-8">
            <div class="col-md-12">
                <!-- page header -->
                <div>
                    <h2>編輯類別</h2>
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
                    <form action="{{ route('type.update', ['type' => $type->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body p-0">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <label class="form-check-label fs-1" for="firstCheckbox">產品名稱</label>
                                    <input name="name" class="form-check-input me-1 fs-1 w-75" type="text" value="{{ $type->name }}" required>
                                </li>
                                <li class="list-group-item">
                                    @foreach ($type->productTypeImg ?? [] as $item)
                                        <img style="width: 80px;" src="{{ asset($item->img_path) }}" alt="">
                                    @endforeach
                                    <hr>
                                    <label class="form-check-label fs-1" for="secondCheckbox">類別圖片</label>
                                    <input class="form-check-input me-1 fs-1 w-75" type="file" name="image[]" value=""
                                        style="height: 100px;" multiple accept="image/*">
                                </li>
                                <li class="list-group-item" style="height: 300px">
                                    <label class="form-check-label fs-1" for="thirdCheckbox">類別描述</label>
                                    <hr>
                                    <textarea name="desc" class="w-100" style="resize: none; min-height: 150px;">{{ $type->desc }}</textarea>
                                </li>
                            </ul>
                            <div class="btn-group justify-content-center d-flex">
                                <a href="{{ route('type.index') }}" class="btn btn-primary m-3">取消按鈕</a>
                                <button type="submit" class="btn btn-primary m-3">儲存按鈕</button>
                            </div>
                        </div>
                    </form>
                    <!-- card body -->
                </div>

            </div>

        </div>
    </div>
@endsection
