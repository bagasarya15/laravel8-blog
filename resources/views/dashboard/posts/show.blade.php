@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3 mx-3">
            <div class="col-lg-8">
                <h1 class="h4"> {{ $post->title }}</h1>

                <div class="my-3">
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-warning"> <i
                            class="fas fa-edit"></i> Edit</a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm btn-danger"
                            onclick="return confirm('Yakin ingin menghapus postingan ini ?')">
                            <i class="fas fa-trash"> </i> Delete
                        </button>
                    </form>
                </div>

                <div class="card" style="max-width: 50rem;">
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
                            <a href="/dashboard/posts" class="text-decoration-none badge bg-primary link-light"> <i
                                    class="fas fa-arrow-circle-left"></i> Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
