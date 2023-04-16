@foreach ($data_books as $my_book)
    @if ($my_book->user_id == auth()->user()->id)
        <div class="col-md-4 col-6 col-lg-3 mb-3">
            <a href="/my/profile/my-book/{{ $my_book->slug }}" class="book-item">
                <div class="card content">
                    <img src="{{ asset('storage/' . $my_book->cover_book) }}" class="card-img-top"
                        alt="image_{{ $my_book->cover_book }}">

                    <div class="card description">
                        <div class="fw-bold">{{ $my_book->title }}</div>
                        <small>By {{ $my_book->author }}</small>
                    </div>
                </div>
            </a>
        </div>
    @endif
@endforeach
