@extends('layout.index')
@section('content')
    @include('layout.profile-hero')
    <div class="container-fluid py-4">
        <div class="row" id="my-book">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 order-2">
                            <h2>{{ $detail_my_book->title }}</h2>
                            <div class="fw-bold">{{ $detail_my_book->author }}</div>
                            <small><i>{{ date('M, Y', strtotime($detail_my_book->published)) }}</i></small><br> <br>
                            <p>{{ $detail_my_book->synopsis }}</p>
                            <small>{{ $detail_my_book->created_at->diffForHumans() }}</small>
                            <small
                                class="badge rounded-pill mx-2 {{ $detail_my_book->status == 'Public' ? 'text-bg-success' : 'text-bg-warning' }} mb-3">{{ $detail_my_book->status }}</small>

                            <div class="btn-group d-block">
                                <a href="{{ asset('storage/' . $detail_my_book->file_book) }}"
                                    class="btn btn-gradient-primary text-white">Read Now</a>
                            </div>
                            <div class="btn-action position-absolute" style="right: 30px; top: 30px;">
                                <a href="/my/profile/my-book/edit/{{ $detail_my_book->slug }}" class="mx-2 btn btn-warning"
                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i
                                        class="fa fa-edit"></i></a>

                                <form action="/my/profile/my-book/delete/{{ $detail_my_book->id }}" enctype="multipart/form-data" class="d-inline">
                                    <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><i class="fa fa-trash"></i></button>
                                </form>        


                                {{-- <a href="/my/profile/my-book/delete/{{ $detail_my_book->id }}" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-title="Delete"><i class="fa fa-trash"></i></a> --}}
                            </div>

                        </div>
                        <div class="col-md-4 order-1">

                            <img src="{{ asset('storage/' . $detail_my_book->cover_book) }}" alt
                                style="width: 100%; border-radius: 10px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
