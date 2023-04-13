@extends('layout.index')
@section('content')
    <div class="row mt-4" id="add-book">
        <div class="col">
            <form action="/my/testimonial/add" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        {{-- <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                id="title" value="{{ old('title') }}">
                            <small class="invalid-feedback">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div> --}}
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror" cols="30"
                                rows="7" maxlength="500" aria-valuetext="{{ old('message') }}">{{ old('message') }}</textarea>
                            {{-- <small><i class="text-secondary">Max character 0/500</i></small> --}}

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
