@extends('templates.fontTemplete')

@section('main-content')
    <section class="messageBoard">
        <div class="container">
            <div class="d-flex flex-column justify-content-center flex-wrap align-items-center">
                @foreach ($messages as $item)
                    <div class="card w-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->message }}</h5>
                            <form action="{{ route('messageUpdate', ['id' => $item->id]) }}" method="post" class="mod-form d-none"
                                data-id="{{ $item->id }}">
                                @csrf
                                @method('put')
                                <div class="form-floating mb-3">
                                    <input type="text" name="message" class="form-control" id="floatingInput"
                                        placeholder="修改您的訊息" value="{{ $item->message }}">
                                    <label for="floatingInput">修改訊息</label>
                                </div>
                                <button type="button" class="btn btn-primary cancel-mod"
                                    onclick="cancelMod({{ $item->id }})" data-id="{{ $item->id }}">取消修改</button>
                                <button type="submit" class="btn btn-primary submit-mod" onclick="submitMod({{ $item->id }})">確認修改</button>
                            </form>
                            <div class="d-flex">

                                <button type="button" class="btn mb-2 btn-success  btn-success-self edit-mese" data-id="{{ $item->id }}" onclick="editMese({{ $item->id }})">Edit</button>

                                <form action="{{ route('messageDestroy', ['id' => $item->id]) }}" method="post"
                                    class="delete-alert" data-name="{{ $item->name }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn  btn-success  btn-success-self">Delete</button>
                                </form>

                            </div>

                            @foreach ($item->replyToMessage as $reply)
                            <form id="replyForm{{ $reply->id }}" action="{{ route('replyUpdate', ['id' => $reply->id]) }}" method="POST" class="d-flex column-gap-3 align-items-center">
                                @csrf
                                @method('PUT')
                                <h5 id="replyTitle{{ $reply->id }}" class="card-title me-auto">{{ $reply->replay_message }}</h5>
                                <div id="replyInput{{ $reply->id }}" class="form-floating mb-3 me-auto d-none">
                                    <input type="text" name="reply" class="form-control" id="floatingInput"
                                        placeholder="留下您的訊息" value="{{ $reply->replay_message }}">
                                    <label for="floatingInput">編輯回覆</label>
                                </div>
                                <button class="btn-primary btn" type="button" onclick="editReply({{ $reply->id }}, this)">編輯</button>
                                <button id="updateReply{{ $reply->id }}" type="submit" class="btn-primary btn d-none">儲存更動</button>
                                <button type="button" class="btn-danger btn" onclick="deleteReply({{ $reply->id }})">刪除</button>
                            </form>
                            @endforeach
                            <form action="{{ route('replayStore', ['id' => $item->id]) }}" method="post">
                                @csrf
                                <input type="hidden" name="message_id" value="{{ $item->id }}">
                                <div class="form-floating mb-3">
                                    <input type="text" name="reply" class="form-control" id="floatingInput"
                                        placeholder="留下您的訊息">
                                    <label for="floatingInput">回覆留言板</label>
                                </div>
                                <button type="submit" class="btn btn-primary">傳送訊息</button>
                            </form>
                        </div>
                    </div>
                @endforeach
                {{-- 初始欄位 --}}
                <div class="card w-100">
                    <div class="card-body">
                        <form action="{{ route('messageStore') }}" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="message" class="form-control" id="floatingInput"
                                    placeholder="留下您的訊息">
                                <label for="floatingInput">留言板</label>
                            </div>
                            <button type="submit" class="btn btn-primary">傳送訊息</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection


@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function cancelMod(id) {
            console.log(`Canceling form with ID ${id}`);
            const form = document.querySelector(`.mod-form[data-id="${id}"]`);
            const cancel = document.querySelector(`.cancel-mod[data-id="${id}"]`);

            if (cancel) {
                form.classList.add('d-none');
            }

        }
        function editMese(id) {
            console.log(`editMesewith ID ${id}`);
            const form = document.querySelector(`.mod-form[data-id="${id}"]`);
            const editMese = document.querySelector(`.edit-mese[data-id="${id}"]`);

            if (editMese) {
                form.classList.remove('d-none');
            }

        }
        function submitMod(id) {
            console.log(`submitMod with ID ${id}`);
            const form = document.querySelector(`.mod-form[data-id="${id}"]`);
            const submit = document.querySelector(`.submit-mod[data-id="${id}"]`);

            if (submit) {
                form.classList.add('d-none');
            }

        }

        function editReply(id, el) {
            const title = document.querySelector(`#replyTitle${id}`);
            const input = document.querySelector(`#replyInput${id}`);
            const replyBtn = document.querySelector(`#updateReply${id}`);

            title.classList.toggle('d-none');
            input.classList.toggle('d-none');
            replyBtn.classList.toggle('d-none');

            if (title.classList.contains('d-none')) {
                el.textContent = '取消編輯';
            } else {
                el.textContent = '編輯';
            }
        }

        function deleteReply(id) {
            Swal.fire({
                title: '確認要刪除嗎?',
                showDenyButton: true,
                showCancelButton: true,
                showConfirmButton: false,
                denyButtonText: `刪除`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isDenied) {
                    // Swal.fire('執行刪除')
                    const formData = new FormData();
                    formData.append('_token', '{{ csrf_token() }}');
                    formData.append('_method', 'delete');
                    fetch(`/reply/destroy/${id}`, {
                        method: 'post',
                        body: formData,
                    }).then((res) => {
                        return res.text();
                    }).then((data) => {
                        if (data != 'success') return;
                        const form = document.querySelector(`form#replyForm${id}`);
                        form.remove();
                    });
                }
            });
        }
    </script>
@endsection
