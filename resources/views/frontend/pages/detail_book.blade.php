@extends('layout.index')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 order-2">
                            <h2>{{ $data_book->title }}</h2>
                            <div class="fw-bold">By {{ $data_book->author }}</div>
                            <small><i>{{ date('M, Y', strtotime($data_book->published)) }}</i></small><br><br>
                            <p>{{ $data_book->synopsis }}</p>
                            <div class="fw-bold text-dark">{{ $data_book->user->name }}</div>
                            <small>{{ $data_book->created_at->diffForHumans() }}</small><br> <br>
                            <button type="button" class="btn btn-gradient-primary text-white" onclick="error()">Read
                                Now</button>
                            {{-- <a href="{{ asset('storage/' . $data_book->file_book) }}"
                                class="btn btn-gradient-primary text-white">Baca Sekarang</a> --}}
                        </div>
                        <div class="col-md-4 order-1">

                            <img src="{{ asset('storage/' . $data_book->cover_book) }}" alt
                                style="width: 100%; border-radius: 10px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function error() {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Login terlebih dahulu',
            })
        }
    </script>
@endsection
