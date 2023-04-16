@extends('layout.index')
@section('content')
    {{-- Data Buku --}}
    <div class="row mt-4" id="data-books">
        @foreach ($data_books as $book)
            @if ($book->status == 'Public')
                <div class="col-md-4 col-6 col-lg-3 mb-3">
                    <a href="/my/book/{{ $book->slug }}" class="book-item">
                        <div class="card content">
                            <img src="{{ asset('storage/' . $book->cover_book) }}" class="card-img-top" alt="img-cover">
                            <div class="card description">
                                <div class="fw-bold">{{ $book->title }}</div>
                                <small>By {{ $book->author }}</small>
                            </div>
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
