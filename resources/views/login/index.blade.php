@extends('layout.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <main class="form-signin">
                <form action="/login" method="post">
                    @csrf
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-blog mb-3 text-danger" style="font-size: 70px"></i>
                    </div>

                    <div class="d-flex justify-content-center">
                        <h1 class="h3 mb-3 fw-normal" style="font-family: poppins">Login</h1>
                    </div>

                    {{-- Alert Succes Registrasi --}}
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    {{-- End Alert --}}

                    {{-- Alert Login Failed --}}
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    {{-- End Login Failed --}}

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" autocomplete="off" value="{{ old('email') }}"
                            autofocus>
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                            autocomplete="off">
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-danger" type="submit">Login</button>
                </form>
                <div class="d-block text-center mt-3">
                    <small>Belum punya akun ? <a href="/register" class="text-decoration-none">Registrasi
                            Sekarang !</a></small>
                </div>
            </main>
        </div>
    </div>
@endsection
