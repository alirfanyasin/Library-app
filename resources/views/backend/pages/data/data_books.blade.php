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
