@extends('layout.index')
@section('content')
    {{-- Profiel Menu start --}}
    <div class="page-header min-height-300 border-radius-xl mt-4"
        style="background-image: url('/template/assets/img/auth-img/hero-register-img.png'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div>
    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    @if (auth()->user()->avatar == 'avatar/avatar.png')
                        <img src="{{ asset('storage/'. auth()->user()->avatar) }}" width="30px"
                            class="rounded-pill mx-1" alt="avatar">
                    @else
                        <img src="{{ auth()->user()->avatar }}" width="30px" class="rounded-pill mx-1" alt="avatar">
                    @endif
                    {{-- <img src="{{ auth()->user()->avatar }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm"> --}}
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        {{ auth()->user()->name }}
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                        {{ auth()->user()->email }}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3" id="profile-menu">
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                        <li class="nav-item active my-book-menu">
                            <a class="nav-link mb-0 px-0 py-1" onclick="my_book_active()" data-bs-toggle="tab"
                                href="#" role="tab" aria-selected="true">
                                <i class="fa-solid fa-book"></i>
                                <span class="ms-1">My Books</span>
                            </a>
                        </li>

                        <li class="nav-item setting-menu">
                            <a class="nav-link mb-0 px-0 py-1" onclick="setting_active()" data-bs-toggle="tab"
                                href="#" role="tab" aria-selected="false">
                                <i class="fa-solid fa-gear"></i>
                                <span class="ms-1">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- Profiel Menu end --}}
    <div class="container-fluid py-4">
        <div id="data-books">

            <div class="row" id="profile-content">
                {{-- Setting --}}

                {{-- Data Book Profile --}}


            </div>
        </div>

    </div>


    {{-- AJAX --}}
    <script>
        $(document).ready(function() {
            setting_active()
            my_book_active()
        });

        function read_book() {
            $.get("{{ url('my/profile/read-book') }}", {}, function(data, status) {
                $('#profile-content').html(data)
            })
        }

        function read_setting() {
            $.get("{{ url('my/profile/read-setting') }}", {}, function(data, status) {
                $('#profile-content').html(data)
            })
        }



        function my_book_active() {
            $('.my-book-menu').addClass('active')
            $('.setting-menu').removeClass('active')

            read_book();
        }

        function setting_active() {
            $('.my-book-menu').removeClass('active');
            $('.setting-menu').addClass('active');
            read_setting();
        }
    </script>
@endsection
