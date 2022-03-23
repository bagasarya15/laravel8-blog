@extends('layout.main')

@section('container')
    <h1 style="font-family:poppins;" class="h3 mb-3 text-danger text-center">{{ $title }}</h1>

    <div class="row mb-3 justify-content-center">
        <div class="col-lg" style="max-width: 80%">
            <form action="/posting" method="">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}" autocomplete="off" autofocus>
                    <button class="btn btn-danger" type="submit" id="">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count() > 0)
        @if ($posts[0]->image)
            <div class="d-flex justify-content-center" style="max-height:400px; overflow:hidden;">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                    class="img-fluid">
            </div>
        @else
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->category->name }}">
        @endif
        <div class="card mb-3">
            <div class="card-body text-center">
                <h5 class="card-title"><a href="/posting/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>

                <small class="text-muted">
                    By. <a href="/posting?author={{ $posts[0]->author->username }}"
                        class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                        href="/posting?category={{ $posts[0]->category->slug }}" class="text-decoration-none">
                        {{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                </small>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posting/{{ $posts[0]->slug }}" class="text-decoration-none badge bg-primary link-light mt-2">
                    <i class="fa fa-info-circle"></i>
                    Selengkapnya
                </a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3  d-flex justify-content-center">
                        <div class="card my-2" style="width: 18rem; max-height:50rem;">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                    class="img-fluid">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                            @endif
                            <div class=" position-absolute px-3 py-2"
                                style="background-color: rgba(0, 0, 0, 0.7); font-size:12px;">
                                <a href="/posting?category={{ $post->category->slug }}"
                                    class="text-decoration-none text-white">{{ $post->category->name }}</a>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>
                                    <small class="text-muted">
                                        By. <a href="/posting?author={{ $post->author->username }}"
                                            class="text-decoration-none">{{ $post->author->name }}</a>
                                        {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posting/{{ $post->slug }}"
                                    class="text-decoration-none badge bg-primary link-light mt-2"> <i
                                        class="fa fa-info-circle"></i>
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        {{-- Pages Not Found --}}
        @include('partials.404')
        {{-- End Pages Not Found --}}
    @endif

    {{-- Pagination --}}
    <div class="mt-5">
        @include('partials.pagination')
    </div>
    {{-- End Pagination --}}
@endsection
