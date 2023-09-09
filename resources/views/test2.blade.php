@extends('templates.template')


@section('main')
  {{-- <button type="button" class="btn btn-primary" onclick="fetchData()">測試</button>
  <a href="{{ route('test-step1') }}">到step1</a> --}}
  <div>setep02</div>
  <div>電話:{{ $phone }}</div>
  <div>名子:{{ $name }}</div>
  <a href="{{ route('test.step1')}}">上一步</a>
@endsection

@section('js')
  <script>
    function fetchData() {
      const formData = new FormData();
      formData.append('test', 123456);
      formData.append('_token', '{{ csrf_token() }}');
      fetch('/fetch/test', {
        method: 'POST',
        body: formData,
      });
    }
  </script>
@endsection