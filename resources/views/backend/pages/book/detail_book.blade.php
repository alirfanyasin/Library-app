@extends('layout.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 order-2">
                            <h2>{{ $data_books->title }}</h2>
                            <div class="fw-bold mb-2">By {{ $data_books->author }},
                                <small><i>{{ date('M, Y', strtotime($data_books->published)) }}</i></small>
                            </div>
                            <small class="bg-secondary text-white px-3 py-1 rounded-pill">{{ $data_books->category }}</small>
                            <br><br>
                            <p>{{ $data_books->synopsis }}</p>
                            <div class="fw-bold text-dark">{{ $data_books->user->name }}</div>
                            <small>{{ $data_books->created_at->diffForHumans() }}</small><br> <br>
                            <a href="{{ asset('storage/' . $data_books->file_book) }}"
                                class="btn btn-gradient-primary text-white">Read Now</a>
                        </div>
                        <div class="col-md-4 mb-3 order-1">
                            <img src="{{ asset('storage/' . $data_books->cover_book) }}" alt
                                style="width: 100%; border-radius: 10px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
