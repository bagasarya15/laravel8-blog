@extends('dashboard.layouts.main')

@section('container')
    <div class="container mx-3 my-3">
        <h1 class=" h5 text-danger" style="font-family: poppins;">{{ $title }}</h1>
        <hr>
        <div class="col-lg-8">
            <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                        autofocus value="{{ old('title') }}" autocomplete="off">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                        value="{{ old('slug') }}" readonly>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" aria-label="Default select example" id="category_id" name="category_id">
                        @foreach ($categories as $category)
                            @if (old('category_id') == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label  @error('image') is-invalid @enderror">Posts Image</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control" type="file" id="image" name="image" onchange="previewImage()"
                        autocomplete="off">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="source" class="form-label">Source Media</label>
                    <input type="text" class="form-control @error('source') is-invalid @enderror" id="source" name="source"
                        value="{{ old('source') }}" autocomplete="off">
                    @error('source')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    @error('body')
                        <small>
                            <p class="text-danger"> {{ $message }}</p>
                        </small>
                    @enderror
                    <input value="{{ old('body') }}" type="hidden" id="body" name="body" autocomplete="off">
                    <trix-editor input="body"></trix-editor>
                </div>

                <button type="submit" class="btn btn-sm btn-primary"> <i class="fas fa-plus-square"></i> Create
                    Posts</button>
            </form>
        </div>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(responese => responese.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>

@endsection
