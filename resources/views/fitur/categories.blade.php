@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4 mb-3">
                    <a href="/posting?category={{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img"
                                alt="{{ $category->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4"
                                    style="background-color: rgba(0, 0, 0, 0.7); font-size:14px; font-family:poppins;">
                                    {{ $category->name }}
                                </h5>
                                <p class="card-text"></p>
                                {{-- <p class="card-text">Last updated 3 mins ago</p> --}}
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
