@extends('layout.index')
@section('content')
    {{-- Carousel start --}}
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="1000">
                <img src="/template/assets/img/carousel-img/img-1.png" class="d-block w-100" alt="Carousel Img">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="1000">
                <img src="/template/assets/img/carousel-img/img-2.jpg" class="d-block w-100" alt="Carousel Img">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="1000">
                <img src="/template/assets/img/carousel-img/img-3.jpg" class="d-block w-100" alt="Carousel Img">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- Carousel end --}}

    {{-- Services Start --}}
    <header class="text-center my-5">
        <h2>Our Services</h2>
        <p class="fw-semibold" style="color: #d26710;">The services we provide</p>
    </header>
    <div class="row" id="services-home">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="icon-section mb-4" style="background: #d26710;">
                        <i class="fa-solid fa-book-open-reader"></i>
                    </div>
                    <h4>Read Free Books</h4>
                    <p>Read books for free and easily accessible wherever you are</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="icon-section mb-4" style="background: #6b10d2;">
                        <i class="fa-solid fa-download"></i>
                    </div>
                    <h4>Download To PDF</h4>
                    <p>To save the book you like, you can download it for free pdf version</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="icon-section mb-4" style="background: #d21095;">
                        <i class="fa-solid fa-book-medical"></i>
                    </div>
                    <h4>Upload Books</h4>
                    <p>Share your writing to be useful for others by uploading a book</p>
                </div>
            </div>
        </div>
    </div>
    {{-- Services Start --}}




    {{-- Vision and Mission start --}}
    <header class="text-center my-5">
        <h2>Vision and Mission</h2>
        <p class="fw-semibold" style="color: #d26710;">The main purpose of this application</p>
    </header>
    <div class="row">
        <div class="col-md-6 mb-4">
            <img src="/template/assets/img/img-2.png" alt="" style="width: 100%;">
        </div>
        <div class="col-md-6">
            <section class="vision-section">
                <h3 class="fw-semibold">Vision</h3>
                <p>Make it easy for users to read books whenever and wherever they are, all books are distributed free of
                    charge and easily accessible and you can share your writing with others to make it more useful.</p>
            </section>
            <section class="mission-section">
                <h3 class="fw-semibold">Mission</h3>
                <ul>
                    <li>Makes it easy for everyone to read books anywhere</li>
                    <li>Save the cost of buying books</li>
                    <li>Get people interested in reading books</li>
                    <li>Opening a window to the world by reading</li>
                </ul>
            </section>

        </div>
    </div>
    {{-- Vision and Mission end --}}


    {{-- Category Book start --}}
    <header class="text-center my-5">
        <h2>Book Category</h2>
        <p class="fw-semibold" style="color: #d26710;">Many categories of books available</p>
    </header>
    <div class="row mt-5" id="book-category">
        <div class="col-md-4 col-lg-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <span class="check-list">
                        <i class="fa-solid fa-check"></i>
                    </span>
                    <span class="fw-bold">Education</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <span class="check-list">
                        <i class="fa-solid fa-check"></i>
                    </span>
                    <span class="fw-bold">E-Book</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <span class="check-list">
                        <i class="fa-solid fa-check"></i>
                    </span>
                    <span class="fw-bold">History</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <span class="check-list">
                        <i class="fa-solid fa-check"></i>
                    </span>
                    <span class="fw-bold">Novel</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <span class="check-list">
                        <i class="fa-solid fa-check"></i>
                    </span>
                    <span class="fw-bold">Comic</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <span class="check-list">
                        <i class="fa-solid fa-check"></i>
                    </span>
                    <span class="fw-bold">Journal</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <span class="check-list">
                        <i class="fa-solid fa-check"></i>
                    </span>
                    <span class="fw-bold">Biography</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <span class="check-list">
                        <i class="fa-solid fa-check"></i>
                    </span>
                    <span class="fw-bold">Manga</span>
                </div>
            </div>
        </div>
    </div>
    {{-- Category Book end --}}

    {{-- Tagline Library start --}}
    <section id="tagline" class="my-5">
        <div class="container d-flex justify-content-center text-center">
            <div class="row align-items-center">
                <div class="col-12 text-white">
                    <p><q class="">Inspiring minds, enriching lives <br> is your Gateway to endless
                            knowledge</q></p>
                </div>
            </div>
        </div>
    </section>
    {{-- Tagline Library end --}}


    {{-- Popular book start --}}
    <header class="text-center my-5">
        <h2>Latest Book</h2>
        <p class="fw-semibold" style="color: #d26710;">Books that have been uploaded recently</p>
    </header>
    <div class="row" id="popular-book">
        @foreach ($data_books as $book)
            <div class="col-lg-3 col-md-4 col-6 mb-3">
                <a href="/book/{{ $book->slug }}" class="book-item">
                    <div class="card overflow-hidden" style="height: 100%">
                        <img src="{{ asset('storage/' . $book->cover_book) }}" class="card-img-top" alt="img-cover"
                            style="height: 100%">
                        <div class="card description">
                            <div class="fw-bold">{{ $book->title }}</div>
                            <small>By {{ $book->author }}</small>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
    {{-- Popular book end --}}


    {{-- Testimonials start --}}
    <header class="text-center my-5">
        <h2>User Testimonials</h2>
        <p class="fw-semibold" style="color: #d26710;">What they say about us?</p>
    </header>
    <div class="row slider-testimonials mb-5">
        <div class="col mx-3">
            <div class="card px-3 py-5 text-center">
                <header class="mb-3">
                    <img src="/template/assets/img/team-2.jpg" alt="" class="rounded-pill mx-auto mb-2"
                        width="60px">
                    <div class="fw-bolder">Irfan Yasin</div>
                    <small>Reader</small>
                </header>
                <q>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quibusdam omnis consequuntur assumenda
                    doloribus aliquam facilis molestias quas aspernatur.
                </q>

            </div>
        </div>
        <div class="col mx-3">
            <div class="card px-3 py-5 text-center">
                <header class="mb-3">
                    <img src="/template/assets/img/team-4.jpg" alt="" class="rounded-pill mx-auto mb-2"
                        width="60px">
                    <div class="fw-bolder">Jhon Doe</div>
                    <small>Reader</small>
                </header>
                <q>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quibusdam omnis consequuntur assumenda
                    doloribus aliquam facilis molestias quas aspernatur.
                </q>

            </div>
        </div>
        <div class="col mx-3">
            <div class="card px-3 py-5 text-center">
                <header class="mb-3">
                    <img src="/template/assets/img/team-1.jpg" alt="" class="rounded-pill mx-auto mb-2"
                        width="60px">
                    <div class="fw-bolder">Jessica Diana</div>
                    <small>Reader</small>
                </header>
                <q>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quibusdam omnis consequuntur assumenda
                    doloribus aliquam facilis molestias quas aspernatur.
                </q>

            </div>
        </div>
        <div class="col mx-3">
            <div class="card px-3 py-5 text-center">
                <header class="mb-3">
                    <img src="/template/assets/img/img-1.jpg" alt="" class="rounded-pill mx-auto mb-2"
                        width="60px">
                    <div class="fw-bolder">Jenny Bella</div>
                    <small>Reader</small>
                </header>
                <q>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quibusdam omnis consequuntur assumenda
                    doloribus aliquam facilis molestias quas aspernatur.
                </q>

            </div>
        </div>
        <div class="col mx-3">
            <div class="card px-3 py-5 text-center">
                <header class="mb-3">
                    <img src="/template/assets/img/team-3.jpg" alt="" class="rounded-pill mx-auto mb-2"
                        width="60px">
                    <div class="fw-bolder">Jack Wallson</div>
                    <small>Reader</small>
                </header>
                <q>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quibusdam omnis consequuntur assumenda
                    doloribus aliquam facilis molestias quas aspernatur.
                </q>

            </div>
        </div>
    </div>

    {{-- Testimonials end --}}



    <script>
        $(document).ready(function() {

            $('.slider-testimonials').slick({
                autoplay: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplaySpeed: 2000,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: true,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });


        });
    </script>
@endsection
