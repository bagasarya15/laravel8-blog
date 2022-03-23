<nav class="navbar navbar-expand-lg navbar-dark bg-danger bg-gradient shadow-sm">
    <div class="container">
        <a class="navbar-brand fs-6" href="/" style="font-family: poppins"> <i class="fas fa-blog fa-lg"></i> Moza
            Blog </a>
        <span class="vr bg-light me-auto"></span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav fw-normal mx-2">
                <li class="nav-item">
                    <a class="nav-link {{ $active === '/' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'posting' ? 'active' : '' }}" href="/posting">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}" href="/categories">Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="font-family: poppins; font-size:14px">
                            Welcome, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="/dashboard"><i class="fas fa-cogs"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                {{-- <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"> <i
                                            class="bi bi-box-arrow-in-left text-danger"></i>
                                        Logout
                                    </button>
                                </form> --}}
                                <button type="button" class="dropdown-item" style="margin-right:50%" data-bs-toggle="modal"
                                    data-bs-target="#logout">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </button>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link {{ $active === 'login' ? 'active' : '' }}">
                            <i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
