@extends('layout.main')


@section('container')
    <div class="container">
        <div class="row  d-flex justify-content-center">

            <div class="col-md-8">
                <h1 class="h4"> {{ $post->title }}</h1>
                <p class="small">By. <a href="/posting?author={{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a> in <a
                        href="/posting?category={{ $post->category->slug }}"
                        class="text-decoration-none">{{ $post->category->name }}</a>
                </p>

                <div class="card mt-4" style="max-width: 50rem;">
                    <div class="row g-0">
                        @if ($post->image)
                            <div style="max-height: 400px; overflow:hidden;">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                    class="img-fluid">
                            </div>
                        @else
                            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                                alt="{{ $post->category->name }}" class="img-fluid">
                        @endif
                        <small class="text-muted mb-3 d-flex justify-content-center"> Source Media :
                            {{ $post->source }}</small>
                    </div>

                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <article class="my-3">
                                <small>
                                    {!! $post->body !!}
                                </small>
                            </article>
                            <p class="card-text "><small class="text-muted">Published
                                    {{ $post->created_at->diffForHumans() }}</small></p>
                            <a href="/posting" class="text-decoration-none badge bg-primary link-light">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
