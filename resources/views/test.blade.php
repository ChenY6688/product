@extends('templates.template')


@section('main')
  <button type="button" class="btn btn-primary" onclick="fetchData()">測試</button>
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