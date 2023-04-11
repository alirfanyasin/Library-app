@foreach ($data_books as $my_book)
    @if ($my_book->user_id == auth()->user()->id)
        <div class="col-md-4 col-6 col-lg-3 mb-3">
            <a href="/my/profile/my-book/{{ $my_book->slug }}">
                <div class="card">
                    <img src="{{ asset('storage/' . $my_book->cover_book) }}" class="card-img-top"
                        alt="iamge_{{ $my_book->cover_book }}">
                    <a href="/my/profile/my-book/{{ $my_book->slug }}"
                        class="btn btn-gradient-primary text-white">Detail</a>
                </div>
            </a>
        </div>
    @endif
@endforeach
