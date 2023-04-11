@extends('layout.index')
@section('content')
    {{-- Data Buku --}}
    <div class="row mt-4" id="data-books">

    </div>

    <script>
        $(document).ready(function() {
            read_data()
        })

        function read_data() {
            $.get("{{ url('my/read-books') }}", {}, function(data, status) {
                $("#data-books").html(data)
            })
        }
    </script>
@endsection
