<div class="row mt-4">
    @foreach ($data_books as $book)
        @if ($book->status == 'Public')
            <div class="col-md-4 col-6 col-lg-3 mb-3">
                <a href="/book/{{ $book->slug }}" class="book-item">
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
