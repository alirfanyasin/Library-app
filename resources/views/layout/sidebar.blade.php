<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#" target="_blank">
            <img src="/template/assets/img/main-logo.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold fs-5">Library</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto" id="sidenav-collapse-main">
        @auth
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('my/dashboard') ? 'active' : '' }}" href="/my/dashboard">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">

                            <i class="fa-solid fa-chart-simple" style="font-size: 10pt;"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('my/books') ? 'active' : '' }}{{ Request::is('my/book/*') ? 'active' : '' }}{{ Request::is('my/books/*') ? 'active' : '' }}"
                        href="/my/books">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-book" style="font-size: 10pt;"></i>
                        </div>
                        <span class="nav-link-text ms-1">Books</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('my/testimonial') ? 'active' : '' }}" href="/my/testimonial">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-comment" style="font-size: 10pt;"></i>
                        </div>
                        <span class="nav-link-text ms-1">Testimonial</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('my/feedback') ? 'active' : '' }}" href="/my/feedback">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-flag" style="font-size: 10pt;"></i>
                        </div>
                        <span class="nav-link-text ms-1">Feedback</span>
                    </a>
                </li>

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Request::is('my/profile') ? 'active' : '' || Request::is('my/profile/*')) ? 'active' : '' }}"
                        href="/my/profile">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-user" style="font-size: 10pt;"></i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
            </ul>
        @endauth

        @guest
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-house" style="font-size: 10pt;"></i>
                        </div>
                        <span class="nav-link-text ms-1">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Request::is('books') ? 'active' : '' || Request::is('book/*')) ? 'active' : '' }}"
                        href="books">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-book" style="font-size: 12pt;"></i>
                        </div>
                        <span class="nav-link-text ms-1">Books</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Information Page</h6>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link {{ Request::is('about') ? 'active' : '' }}">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-circle-info" style="font-size: 10pt;"></i>
                        </div>
                        <span class="nav-link-text ms-1">About Us</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="nav-link {{ Request::is('contact') ? 'active' : '' }}">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-phone" style="font-size: 10pt;"></i>
                        </div>
                        <span class="nav-link-text ms-1">Contact</span>
                    </a>
                </li>
            </ul>
        @endguest
    </div>
</aside>
