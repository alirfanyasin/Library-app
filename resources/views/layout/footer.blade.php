<footer class="footer pt-3  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>,
                    made with <i class="fa fa-heart"></i> by
                    <a href="https://github.com/alirfanyasin" class="font-weight-bold" target="_blank">Irfan Yasin</a>
                </div>
            </div>
            <div class="col-lg-6">
                @guest
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="/about" class="nav-link text-muted">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link pe-0 text-muted">Contact</a>
                        </li>
                    </ul>
                @endguest
                @auth
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="/my/dashboard" class="nav-link text-muted">Library App</a>
                        </li>
                    </ul>
                @endauth

            </div>
        </div>
    </div>
</footer>
