@extends('templates.indexTemplate')
@section('head')
    <style>
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }


        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        .btns {
            display: flex;
            justify-content: center;
            align-content: center;
            border: 1px solid #000;
            border-radius: 10px;
        }

        .btns input {
            border: none;
            outline: none;
            width: 50px;
            text-align: center;
        }

        .controlBtn {
            border: none;
            background-color: #fff;
            padding: 10px 15px;
        }

        .minusBtn {
            border-right: 1px solid black;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
        }

        .plusBtn {
            border-left: 1px solid black;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
        }
    </style>
@endsection

@section('main')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            @foreach ($products ?? [] as $item)
                <div class="col">
                    <img src="{{ asset($item->img_path) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->desc }}</p>
                        <p class="card-text">{{ $item->price }}</p>
                        <div class="d-flex justify-content-between">
                            <div class="btns">
                                <button type="button" class="controlBtn minusBtn"
                                    onclick="minus({{ $item->id }})">-</button>
                                <input id="product{{ $item->id }}" type="number" value="1"
                                    onchange="checkQty(this)">
                                <button type="button" class="controlBtn plusBtn"
                                    onclick="plus({{ $item->id }})">+</button>
                            </div>
                            <button type="button" class="btn btn-primary"
                                onclick="addCart({{ $item->id }})">加入購物車</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <input id="addCartRoute" type="hidden" value="{{ route('front.addCart') }}">
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const addCartRoute = document.querySelector('input#addCartRoute').value;
        console.log(addCartRoute);

        function minus(id) {
            const input = document.querySelector(`input#product${id}`);
            if (input.value == '1') return;
            input.value--;
        }

        function plus(id) {
            const input = document.querySelector(`input#product${id}`);
            input.value++;
        }

        function checkQty(el) {
            if (el.value <= 0) {
                el.value = 1;
            }
        }

        function addCart(id) {
            const input = document.querySelector(`input#product${id}`);
            if (parseInt(input.value) <= 0) return;
            const formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('qty', input.value);
            formData.append('product_id', id);

            fetch(addCartRoute, {
                method: 'POST',
                body: formData,
            }).then((res) => {
                return res.json();
            }).then((data) => {
                // console.log(data);
                if (data.code == 1) {
                    Swal.fire('成功加入商品');
                }
            });
        }
    </script>
@endsection
