<nav class="sb-sidenav accordion sb-sidenav-dark bg-danger" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav link-light">

            @can('admin')
                <div class="sb-sidenav-menu-heading text-light">Administrator</div>
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"
                    href="/dashboard/categories">
                    <div class="sb-nav-link-icon"><i class="fas fa-list-ol"></i></div>
                    Posts Categories
                </a>

                <hr style="margin:8px;">
            @endcan
            <div class="sb-sidenav-menu-heading text-light">Menu</div>
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                <div class="sb-nav-link-icon"><i class="fas fa-cogs"></i></div>
                Dashboard
            </a>

            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                <div class="sb-nav-link-icon"><i class="far fa-file-alt"></i></div>
                Posts
            </a>

            <hr style="margin:8px;">

            <div class="sb-sidenav-menu-heading text-light">Logout</div>
            <button type="button" class="btn link-light" style="margin-right:50%" data-bs-toggle="modal"
                data-bs-target="#logout">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </div>
    </div>
</nav>
