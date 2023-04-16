@extends('layout.index')
@section('content')
    {{-- Alert --}}
    @error('user_id')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <p class="text-white">
                @error('user_id')
                    {{ $message }}
                @enderror
            </p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @enderror


    <div class="row mt-4" id="add-book">
        <div class="col-md-6">
            <form action="/my/testimonial/add" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="label" class="form-label">Label</label>
                            <select class="form-select" id="label" name="label">
                                <option selected value="Author">Author</option>
                                <option value="Uploader">Uploader</option>
                                <option value="Reader">Reader</option>
                                <option value="User">User</option>
                            </select>
                        </div>

                        <div class="mb-3 rating">
                            <label for="rating" class="form-label">Rating</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating" id="5-star"
                                            value="<i class='fa-solid fa-star'></i>
                                        <i class='fa-solid fa-star'></i>
                                        <i class='fa-solid fa-star'></i>
                                        <i class='fa-solid fa-star'></i>
                                        <i class='fa-solid fa-star'></i>"
                                            checked>
                                        <label class="form-check-label" for="5-star">
                                            <span class="text-warning">
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-solid fa-star'></i>
                                            </span>
                                            <span> (5)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating" id="4.5-star"
                                            value="<i class='fa-solid fa-star'></i>
                                            <i class='fa-solid fa-star'></i>
                                            <i class='fa-solid fa-star'></i>
                                            <i class='fa-solid fa-star'></i>
                                            <i class='fa-regular fa-star-half-stroke'></i>">
                                        <label class="form-check-label" for="4.5-star">
                                            <span class="text-warning">
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-regular fa-star-half-stroke'></i>
                                            </span>
                                            <span>(4.5)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating"
                                            value=" <i class='fa-solid fa-star'></i>
                                        <i class='fa-solid fa-star'></i>
                                        <i class='fa-solid fa-star'></i>
                                        <i class='fa-solid fa-star'></i>
                                        <i class='fa-regular fa-star'></i>"
                                            id="4-star">
                                        <label class="form-check-label" for="4-star">
                                            <span class="text-warning">
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-regular fa-star'></i>
                                            </span>
                                            <span>(4)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating"
                                            value="<i class='fa-solid fa-star'></i>
                                        <i class='fa-solid fa-star'></i>
                                        <i class='fa-solid fa-star'></i>
                                        <i class='fa-regular fa-star-half-stroke'></i>
                                        <i class='fa-regular fa-star'></i>"
                                            id="3.5-star">
                                        <label class="form-check-label" for="3.5-star">
                                            <span class="text-warning">
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-regular fa-star-half-stroke'></i>
                                                <i class='fa-regular fa-star'></i>
                                            </span>
                                            <span>(3.5)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating"
                                            value="<i class='fa-solid fa-star'></i>
                                        <i class='fa-solid fa-star'></i>
                                        <i class='fa-solid fa-star'></i>
                                        <i class='fa-regular fa-star'></i>
                                        <i class='fa-regular fa-star'></i>"
                                            id="3-star">
                                        <label class="form-check-label" for="3-star">
                                            <span class="text-warning">
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-regular fa-star'></i>
                                                <i class='fa-regular fa-star'></i>
                                            </span>
                                            <span>(3)</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating" value="2.5-star"
                                            id="2.5-star">
                                        <label class="form-check-label" for="2.5-star">
                                            <span class="text-warning">
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-regular fa-star-half-stroke'></i>
                                                <i class='fa-regular fa-star'></i>
                                                <i class='fa-regular fa-star'></i>
                                            </span>
                                            <span>(2.5)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating"
                                            value=" <i class='fa-solid fa-star'></i>
                                        <i class='fa-solid fa-star'></i>
                                        <i class='fa-regular fa-star'></i>
                                        <i class='fa-regular fa-star'></i>
                                        <i class='fa-regular fa-star'></i>"
                                            id="2-star">
                                        <label class="form-check-label" for="2-star">
                                            <span class="text-warning">
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-regular fa-star'></i>
                                                <i class='fa-regular fa-star'></i>
                                                <i class='fa-regular fa-star'></i>
                                            </span>
                                            <span>(2)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating"
                                            value="<i class='fa-solid fa-star'></i>
                                        <i class='fa-regular fa-star-half-stroke'></i>
                                        <i class='fa-regular fa-star'></i>
                                        <i class='fa-regular fa-star'></i>
                                        <i class='fa-regular fa-star'></i>"
                                            id="1.5-star">
                                        <label class="form-check-label" for="1.5-star">
                                            <span class="text-warning">
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-regular fa-star-half-stroke'></i>
                                                <i class='fa-regular fa-star'></i>
                                                <i class='fa-regular fa-star'></i>
                                                <i class='fa-regular fa-star'></i>
                                            </span>
                                            <span>(1.5)</span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="rating"
                                            value="<i class='fa-solid fa-star'></i>
                                            <i class='fa-regular fa-star'></i>
                                            <i class='fa-regular fa-star'></i>
                                            <i class='fa-regular fa-star'></i>
                                            <i class='fa-regular fa-star'></i>"
                                            id="1-star">
                                        <label class="form-check-label" for="1-star">
                                            <span class="text-warning">
                                                <i class='fa-solid fa-star'></i>
                                                <i class='fa-regular fa-star'></i>
                                                <i class='fa-regular fa-star'></i>
                                                <i class='fa-regular fa-star'></i>
                                                <i class='fa-regular fa-star'></i>
                                            </span>
                                            <span>(1)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror" cols="30"
                                rows="7" maxlength="200" aria-valuetext="{{ old('message') }}">{{ old('message') }}</textarea>
                            <small class="invalid-feedback">
                                @error('message')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-gradient-primary text-white">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">My Testimoni</label>
            @foreach ($my_testi as $item)
                <div class="card mt-1 mb-3 p-5 rounded-lg position-relative">
                    <q>
                        {{ $item->message }}
                    </q>
                    <span class="text-warning mt-3">
                        <?php echo $item->rating; ?>
                    </span>
                    <form action="/my/testimonial/delete/{{ $item->id }}" method="POST"
                        enctype="multipart/form-data" class="d-inline">
                        @csrf
                        <button type="submit" class="position-absolute text-secondary"
                            style="background: none; border: none; top: 10px; right: 10px;" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="Delete"><i class="fa fa-trash"></i></button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
    {{-- Sweet alert --}}
@endsection
