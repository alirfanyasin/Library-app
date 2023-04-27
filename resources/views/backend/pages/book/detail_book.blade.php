@extends('layout.index')
@section('content')
    {{-- Start: Script Flip Book --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $("#read").flipBook({
                //Layout Setting
                pdfUrl: '<?php echo asset('storage/' . $data_books->file_book); ?>',
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
                            <div class="btn-group d-block">
                                <a id="read" class="btn btn-gradient-primary text-white">Read Now <i
                                        class="fa-solid fa-book-open"></i></a>
                                <a href="{{ asset('storage/' . $data_books->file_book) }}"
                                    class="btn btn-light text-gradient-primary"
                                    download="{{ $data_books->title }} by {{ $data_books->author }} - Library App">Download
                                    <i class="fas fa-download fa-lg"></i></a>
                            </div>
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
