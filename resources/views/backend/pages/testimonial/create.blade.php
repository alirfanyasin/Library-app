@extends('layout.index')
@section('content')
    <div class="row mt-4" id="add-book">
        <div class="col">
            <form action="/my/testimonial/add" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
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
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="5-star" checked>
                                <label class="form-check-label" for="5-star">
                                    <span class="text-warning">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </span>
                                    <span> (5)</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="4.5-star">
                                <label class="form-check-label" for="4.5-star">
                                    <span class="text-warning">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star-half-stroke"></i>
                                    </span>
                                    <span>(4.5)</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="4-star">
                                <label class="form-check-label" for="4-star">
                                    <span class="text-warning">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </span>
                                    <span>(4)</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="3.5-star">
                                <label class="form-check-label" for="3.5-star">
                                    <span class="text-warning">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star-half-stroke"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </span>
                                    <span>(3.5)</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="3-star">
                                <label class="form-check-label" for="3-star">
                                    <span class="text-warning">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </span>
                                    <span>(3)</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="2.5-star">
                                <label class="form-check-label" for="2.5-star">
                                    <span class="text-warning">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star-half-stroke"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </span>
                                    <span>(2.5)</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="2-star">
                                <label class="form-check-label" for="2-star">
                                    <span class="text-warning">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </span>
                                    <span>(2)</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="1.5-star">
                                <label class="form-check-label" for="1.5-star">
                                    <span class="text-warning">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star-half-stroke"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </span>
                                    <span>(1.5)</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rating" id="1-star">
                                <label class="form-check-label" for="1-star">
                                    <span class="text-warning">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </span>
                                    <span>(1)</span>
                                </label>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror" cols="30"
                                rows="7" maxlength="500" aria-valuetext="{{ old('message') }}">{{ old('message') }}</textarea>
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
    </div>
@endsection
