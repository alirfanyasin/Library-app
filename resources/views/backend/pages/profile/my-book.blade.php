@extends('layout.index')
@section('content')
    @include('layout.profile-hero')

    {{-- Start: Script Flip Book --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $("#read").flipBook({
                //Layout Setting
                pdfUrl: '<?php echo asset('storage/' . $detail_my_book->file_book); ?>',
                lightBox: true,
                layout: 3,
                currentPage: {
                    vAlign: "bottom",
                    hAlign: "left"
                },
                // BTN SETTING
                btnShare: {
                    enabled: false
                },
                btnPrint: {
                    hideOnMobile: true
                },
                btnDownloadPages: {
                    enabled: true,
                    title: "Download pages",
                    icon: "fa-download",
                    icon2: "file_download",
                    url: "images/pdf.rar",
                    name: "allPages.zip",
                    hideOnMobile: false
                },
                // btnColor: 'rgb(255,120,60)',
                btnColor: '#984500',
                // sideBtnColor: 'rgb(255,120,60)',
                sideBtnColor: '#984500',
                sideBtnSize: 30,
                sideBtnBackground: "rgba(0,0,0,.7)",
                sideBtnRadius: 30,
                btnSound: {
                    vAlign: "top",
                    hAlign: "left"
                },
                btnAutoplay: {
                    vAlign: "top",
                    hAlign: "left"
                },
            });
        })
    </script>
    {{-- End: Script Flip Book --}}
    <div class="container-fluid py-4">
        <div class="row" id="my-book">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 order-2">
                            <h2>{{ $detail_my_book->title }}</h2>
                            <div class="fw-bold mb-2">By {{ $detail_my_book->author }},
                                <small><i>{{ date('M, Y', strtotime($detail_my_book->published)) }}</i></small>
                            </div>
                            <small
                                class="bg-secondary text-white px-3 py-1 rounded-pill">{{ $detail_my_book->category }}</small>
                            <small
                                class="badge rounded-pill mx-2 {{ $detail_my_book->status == 'Public' ? 'text-bg-success' : 'text-bg-warning' }}">{{ $detail_my_book->status }}</small>
                            <br> <br>
                            <p>{{ $detail_my_book->synopsis }}</p>
                            <small>{{ $detail_my_book->created_at->diffForHumans() }}</small>


                            <div class="btn-group d-block">
                                <a id="read" class="btn btn-gradient-primary text-white mt-3">Read Now <i
                                        class="fa-solid fa-book-open"></i></a>
                                <a href="{{ asset('storage/' . $detail_my_book->file_book) }}"
                                    class="btn btn-light text-gradient-primary mt-3"
                                    download="{{ $detail_my_book->title }} by {{ $detail_my_book->author }} - Library App">Download
                                    <i class="fas fa-download fa-lg"></i></a>
                            </div>
                            <div class="btn-action position-absolute" style="right: 30px; top: 30px;">
                                <a href="/my/profile/my-book/edit/{{ $detail_my_book->slug }}" class="mx-2 btn btn-warning"
                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"><i
                                        class="fa fa-edit"></i></a>

                                <form action="/my/profile/my-book/delete/{{ $detail_my_book->id }}"
                                    enctype="multipart/form-data" class="d-inline">
                                    <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-title="Delete"><i class="fa fa-trash"></i></button>
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
