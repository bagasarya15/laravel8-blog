@extends('layout.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-register">
                <form action="/register" method="post">
                    @csrf
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-blog mb-3 text-danger" style="font-size: 70px"></i>
                    </div>

                    <div class="d-flex justify-content-center">
                        <h1 class="h3 mb-3 fw-normal">Registrasi</h1>
                    </div>

                    <div class="form-floating">
                        <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @enderror"
                            id="name" placeholder="Name" autocomplete="off" value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username')is-invalid @enderror"
                            id="username" placeholder="Username" autocomplete="off" value="{{ old('username') }}">
                        <label for=" username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email"
                            placeholder="name@example.com" autocomplete="off" value="{{ old('email') }}">
                        <label for=" email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control rounded-bottom @error('password')is-invalid @enderror" id="password"
                            placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Registrasi</button>
                </form>
                <div class="d-block text-center mt-3">
                    <small>Sudah punya akun ? <a href="/login" class="text-decoration-none">Kembali Halaman
                            Login</a></small>
                </div>
            </main>
        </div>
    </div>
@endsection
