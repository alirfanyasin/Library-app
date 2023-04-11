@extends('layout.index')
@section('content')
    <div class="row mb-5">
        <div class="col">
            <img src="/template/assets/img/contact-img.png" alt="" width="100%">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 ">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="full-name">Full Name</label>
                    <input type="text" id="full-name" name="full_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email_address" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-gradient-primary text-white">Submit</button>
                </div>
            </form>
        </div>

        <div class="col-md-6 mt-4" id="sosmed-contact">
            <a href="" class="d-block">
                <div class="card mb-3">
                    <div class="card-body">
                        <i class="fa fa-whatsapp"></i>
                        <span>Whatsapp</span>
                    </div>
                </div>
            </a>
            <a href="" class="d-block">
                <div class="card mb-3">
                    <div class="card-body">
                        <i class="fa fa-facebook"></i>
                        <span class="ml-3">Facebook</span>
                    </div>
                </div>
            </a>
            <a href="" class="d-block">
                <div class="card mb-3">
                    <div class="card-body">
                        <i class="fa fa-instagram"></i>
                        <span class="ml-3">Instagram</span>
                    </div>
                </div>
            </a>

            <a href="" class="d-block">
                <div class="card mb-3">
                    <div class="card-body">
                        <i class="fa fa-github"></i>
                        <span class="ml-3">GitHub</span>
                    </div>
                </div>
            </a>

        </div>
    </div>
@endsection
