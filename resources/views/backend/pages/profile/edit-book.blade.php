@extends('layout.index')
@section('content')
    @include('layout.profile-hero')
    <div class="container-fluid py-4">
        <div class="row" id="edit-book">
            <form action="/my/profile/my-book/update/{{ $data_book->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                id="title" value="{{ $data_book->title }}">
                            <small class="invalid-feedback">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Author / Writer</label>
                            <input type="text" name="author" class="form-control @error('author') is-invalid @enderror"
                                id="author" value="{{ $data_book->author }}">
                            <small class="invalid-feedback">
                                @error('author')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>

                        <div class="mb-3">
                            <label for="book-published" class="form-label">Book Published </label>
                            <input type="month" name="published"
                                class="form-control @error('published') is-invalid @enderror" id="book-published"
                                value="{{ $data_book->published }}">
                            <small class="invalid-feedback">
                                @error('published')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" id="category" name="category">

                                <option {{ $data_book->category == 'Education' ? 'selected' : '' }} value="Education">
                                    Education</option>

                                <option {{ $data_book->category == 'Story' ? 'selected' : '' }} value="Story">Story
                                </option>
                                <option {{ $data_book->category == 'Jurnal' ? 'selected' : '' }} value="Jurnal">Jurnal
                                </option>
                                <option {{ $data_book->category == 'E-Book' ? 'selected' : '' }} value="E-Book">Ebook
                                </option>
                                <option {{ $data_book->category == 'Novel' ? 'selected' : '' }} value="Novel">Novel
                                </option>
                                <option {{ $data_book->category == 'Komik' ? 'selected' : '' }} value="Komik">Komik
                                </option>
                                <option {{ $data_book->category == 'Other' ? 'selected' : '' }} value="Other">Other
                                </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" name="status" id="status">
                                <option {{ $data_book->status == 'Public' ? 'selected' : '' }} value="Public">Public
                                </option>
                                <option {{ $data_book->status == 'Private' ? 'selected' : '' }} value="Private">Private
                                </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="synopsis" class="form-label">Synopsis</label>
                            <textarea name="synopsis" id="synopsis" class="form-control @error('synopsis') is-invalid @enderror" cols="30"
                                rows="7" maxlength="500" aria-valuetext="{{ $data_book->synopsis }}">{{ $data_book->synopsis }}</textarea>
                            <small><i class="text-secondary">Max character 0/500</i></small>

                            <small class="invalid-feedback">
                                @error('synopsis')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="upload-file-book">
                            <label>Upload Your Book</label>
                            <img src="/template/assets/img/icon-pdf.png" alt="" id="output" class="w-100 mb-3">
                            <div class="form-group files">
                                <input type="file" name="file_book"
                                    class="form-control @error('file_book') is-invalid @enderror" accept=".pdf"
                                    onchange="pdf(event)" value="{{ $data_book->file_book }}">
                                <small class="invalid-feedback">
                                    @error('file_book')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>

                        <div class="upload-thumbnail">
                            <label>Thumbnail / Book Cover</label>
                            <img src="{{ asset('storage/' . $data_book->cover_book) }}" class="w-100 mb-3" alt=""
                                id="preview-img">
                            <div class="form-group files" id="files-img">
                                <input type="file" name="cover_book"
                                    class="form-control @error('cover_book') is-invalid @enderror" accept="image/*"
                                    onchange="img(event)" value="{{ $data_book->cover_book }}">
                                <small class="invalid-feedback">
                                    @error('cover_book')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>

                    </div>
                </div>
                <button type="submit" class="btn btn-gradient-primary text-white">Update</button>
            </form>
        </div>
    </div>
    <script>
        const pdf = event => {
            const input = event.target
            const reader = new FileReader()
            reader.onload = () => {
                const output = document.getElementById('output')
                output.style.display = 'block';
                output.src = '/template/assets/img/icon-pdf.png'
            }
            reader.readAsDataURL(input.files[0])
        }

        const img = event => {
            const input = event.target
            const reader = new FileReader()
            reader.onload = () => {
                const dataURL = reader.result
                const previewImg = document.getElementById('preview-img')
                previewImg.style.display = 'block';
                previewImg.src = dataURL
            }
            reader.readAsDataURL(input.files[0])
        }
    </script>
@endsection
