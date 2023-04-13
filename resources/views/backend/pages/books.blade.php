@extends('layout.index')
@section('content')
    {{-- Data Buku --}}
    <div class="row mt-4" id="data-books">
        @foreach ($data_books as $book)
            @if ($book->status == 'Public')
                <div class="col-md-4 col-6 col-lg-3 mb-3">
                    <a href="/my/book/{{ $book->slug }}">
                        <div class="card">
                            <img src="{{ asset('storage/' . $book->cover_book) }}" class="card-img-top" alt="img-cover">
                            <a href="/my/book/{{ $book->slug }}" class="btn btn-gradient-primary text-white">Detail Book</a>
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>

    {{-- <script>
        $(document).ready(function() {
            read_data();
            search_data();
        })

        function read_data() {
            $.get("{{ url('my/read-books') }}", {}, function(data, status) {
                $("#data-books").html(data)
            })
        }

        function search_data() {
            $.get("{{ url('my/books/search') }}", {}, function(data, status) {
                $("#data-books").html(data)
            })
        }
    </script> --}}
@endsection
