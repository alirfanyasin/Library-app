@extends('layout.index')
@section('content')
    <div class="row mt-4" id="add-book">
        <div class="col">
            <form action="/my/book/store-book" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                id="title" value="{{ old('title') }}">
                            <small class="invalid-feedback">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" name="author" class="form-control @error('author') is-invalid @enderror"
                                id="author" value="{{ old('author') }}">
                            <small class="invalid-feedback">
                                @error('author')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>

                        <div class="mb-3">
                            <label for="book-published" class="form-label">Published </label>
                            <input type="month" name="published"
                                class="form-control @error('published') is-invalid @enderror" id="book-published"
                                value="{{ old('published') }}">
                            <small class="invalid-feedback">
                                @error('published')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" id="category" name="category">
                                <option selected value="Education">Education</option>
                                <option value="History">History</option>
                                <option value="Journal">Journal</option>
                                <option value="E-Book">E-Book</option>
                                <option value="Novel">Novel</option>
                                <option value="Biography">Biography</option>
                                <option value="Manga">Manga</option>
                                <option value="Comic">Comic</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" name="status" id="status">
                                <option selected value="Public">Public</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="synopsis" class="form-label">Synopsis</label>
                            <textarea name="synopsis" id="synopsis" class="form-control @error('synopsis') is-invalid @enderror" cols="30"
                                rows="7" maxlength="500" aria-valuetext="{{ old('synopsis') }}">{{ old('synopsis') }}</textarea>
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
                            <label>Upload File</label>
                            <img src="" alt="" id="output" style="display: none;">
                            <div class="form-group files">
                                <input type="file" name="file_book"
                                    class="form-control @error('file_book') is-invalid @enderror" accept=".pdf"
                                    onchange="pdf(event)">
                                <small class="invalid-feedback">
                                    @error('file_book')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>

                        <div class="upload-thumbnail">
                            <label>Thumbnail / Book Cover</label>
                            <img src="" alt="" id="preview-img" style="display: none; width: 100%;">
                            <div class="form-group files" id="files-img">
                                <input type="file" name="cover_book"
                                    class="form-control @error('cover_book') is-invalid @enderror" accept="image/*"
                                    onchange="img(event)">
                                <small class="invalid-feedback">
                                    @error('cover_book')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>

                    </div>
                </div>
                <button type="submit" class="btn btn-gradient-primary text-white">Upload Book</button>
            </form>
        </div>
    </div>

    <script>
        const pdf = event => {
            const input = event.target
            const reader = new FileReader()
            reader.onload = () => {
                const output = document.getElementById('output')
                const files = document.querySelector('.files');
                files.style.display = 'none';
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
                const filesImg = document.querySelector('#files-img');
                filesImg.style.display = 'none';
                previewImg.style.display = 'block';
                previewImg.src = dataURL
            }
            reader.readAsDataURL(input.files[0])
        }
    </script>
@endsection
