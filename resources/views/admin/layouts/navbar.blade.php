<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/adu.png" alt="" />
            <span class="d-none d-lg-block">Cepu</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            @if (auth()->guard('petugas')->check())
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="assets/img/user.jfif" alt="Profile" class="rounded-circle" />
                        <span
                            class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->guard('petugas')->user()->name }}</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ auth()->guard('petugas')->user()->name }}</h6>
                            <span>Hello</span>
            @endif
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i></i>Logout</button>
            </form>
        </ul>
        </li>
        </ul>
    </nav>
</header>
