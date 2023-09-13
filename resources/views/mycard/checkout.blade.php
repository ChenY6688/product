@extends('templates.indexTemplate')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shopping-car.css') }}">
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
    <div class="container p-4 container-md p-5">
        <!-- Order List標題 -->
        <div class="order">Checkout</div>
        <!-- Dashboard標題 -->
        <div class="text">
            <a href="#" class="green">Dashboard</a>&nbsp&nbsp&nbsp/&nbsp&nbsp&nbspOrder List
        </div>

        <div class="border m-5">
            <div class="mb-3">
                <div class="row">
                    <div class="col-12">
                        <div class="w-100 border">
                            <div class="w100 border-bottom">
                                <span>Oder Details</span>
                            </div>


                            @foreach ($carts as $item)
                                <div id="row{{ $item->id }}" class="row">
                                    <div class="col-3">
                                        <img src="{{ asset($item->product->img_path) }}" alt=""
                                            style="height: 90px">
                                    </div>
                                    <div class="col-3 d-flex flex-column justify-content-center">
                                        <span>{{ $item->product->name }}</span>
                                    </div>
                                    <div class="col-4 d-flex align-items-center">
                                        <div class="btns">
                                            <button type="button" class="controlBtn minusBtn"
                                                onclick="minus({{ $item->id }})">-</button>
                                            <input id="cart{{ $item->id }}" type="number" value="{{ $item->qty }}"
                                                onchange="checkQty('{{ $item->id }}')" name="{{ $item->id }}">
                                            <button type="button" class="controlBtn plusBtn"
                                                onclick="plus({{ $item->id }})">+</button>
                                        </div>
                                    </div>
                                    <div class="col-2 d-flex flex-row-reverse align-items-center">
                                        <span id="price{{ $item->id }}">{{ $item->product->price * $item->qty }}
                                        </span>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-danger"
                                            onclick="deleteCart('{{ $item->id }}')">刪除</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <span class="ms-2">
                        subtotal
                    </span>
                    <span id="total" class="me-2">
                        {{ $total }}
                    </span>
                </div>
            </div>
        </div>
        <a id="nexStep" href="{{ route('cart.step02') }}" class="btn btn-primary">下一步</a>
    </div>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function minus(id) {
            const input = document.querySelector(`#cart${id}`);
            if (input.value == '1') return;
            input.value--;
            fetchQty(id, input.value);
        }

        function plus(id) {
            const input = document.querySelector(`#cart${id}`);
            input.value++;
            fetchQty(id, input.value);
        }

        function checkQty(el) {
            if (el.value <= 0) {
                el.value = 1;
            }
        }
        // id => cart_id
        // qty => 商品數量

        function fetchQty(id, qty) {
            const formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('_method', 'put');
            formData.append('cart_id', id);
            formData.append('qty', qty);
            fetch('{{ route('cart.updateQty') }}', {
                method: 'POST',
                body: formData,
            }).then((response) => {
                return response.json();
            }).then((data) => {
                const price = document.querySelector(`#price${id}`);
                const totalEl = document.querySelector('#total');
                price.textContent = '$' + `${data.price}`;

                const all_price = document.querySelectorAll(`[id^=price]`);
                let total = 0;
                all_price.forEach(element => {
                    const price = parseInt(element.textContent.substring(1));
                    total += price;
                })
                totalEl.textContent = '$' + total;
            })
        }

        function deleteCart(id) {
            Swal.fire({
                title: '確定要刪除嗎?',
                showDenyButton: true,
                showCancelButton: true,
                showConfirmButton: false,
                denyButtonText: `刪除`,
            }).then((result) => {
                if (result.isDenied) {
                    const formData = new FormData();
                    formData.append('_token', '{{ csrf_token() }}');
                    formData.append('_method', 'DELETE');
                    formData.append('cart_id', id);
                    fetch('{{ route('cart.deleteCart') }}', {
                        method: 'POST',
                        body: formData,
                    }).then((res) => {
                        return res.json();
                    }).then((data) => {
                        console.log(123);
                        if (data.code === 1) {
                            const row = document.querySelector(`#row${data.id}`);
                            const rows = document.querySelectorAll('[id^=row]');
                            const nexBtn = document.querySelector('#nexStep');
                            const total = document.querySelector('#total');
                            row.remove();
                            total.textContent = '$' + data.total;

                            if (rows.length === 0) {
                                nexBtn
                            }
                        } else {
                            location.reload();
                        }
                    })

                }
            })
        }
    </script>
@endsection
