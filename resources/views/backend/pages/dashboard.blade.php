@extends('layout.index')
@section('content')
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Books</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ count($data_books) }}
                                    <span class="text-primary-custom text-sm font-weight-bolder">All</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa-solid fa-book" style="font-size: 15pt;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Personal Book</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ $data_private_books }}
                                    <span class="text-primary-custom text-sm font-weight-bolder">Private</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa-solid fa-key" style="font-size: 15pt;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">My Book</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ count($data_my_book) }}
                                    <span class="text-primary-custom text-sm font-weight-bolder">Uploaded</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa-solid fa-book-open-reader" style="font-size: 15pt;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">User</p>
                                <h5 class="font-weight-bolder mb-0">
                                    {{ $data_uploader }}
                                    <span class="text-primary-custom text-sm font-weight-bolder">People</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fa-solid fa-users" style="font-size: 15pt;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-8 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <p class="mb-1 pt-2 text-bold">New Book</p>
                                <h5 class="font-weight-bolder">{{ $data_last_upload->title }}</h5>
                                <p class="mb-5" max="300">{{ $data_last_upload->synopsis }}.</p>
                                <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto"
                                    href="/my/book/{{ $data_last_upload->slug }}">
                                    Read More
                                    <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                            <div class="bg-gradient-primary border-radius-lg h-100 overflow-hidden">
                                <img src="{{ asset('storage/' . $data_last_upload->cover_book) }}" class="card-img-top"
                                    alt="img-lates">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100 p-3">
                <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100"
                    style="background-image: url('/template/assets/img/ivancik.jpg');">
                    <span class="mask bg-gradient-dark"></span>
                    <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                        <h5 class="text-white font-weight-bolder mb-4 pt-2">Motivations</h5>
                        <q class="text-white">Membaca bukan hanya menghibur, tetapi juga membantu Anda mengembangkan
                            keterampilan berpikir kritis, meningkatkan daya ingat, dan meningkatkan konsentrasi Anda.
                            Membaca adalah investasi terbaik untuk masa depan Anda.</q>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
