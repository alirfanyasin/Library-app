@extends('layout.index')
@section('content')
    <div class="row mt-4" id="add-book">
        <div class="col-md-6">
            <form action="/my/feedback/add" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror" cols="30"
                                rows="7" aria-valuetext="{{ old('message') }}">{{ old('message') }}</textarea>
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
