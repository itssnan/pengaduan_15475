<header id="header" class="header">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <img src="assets/img/adu.png">
            <span>Cepu</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li class="nav-item">
                    <a class="nav-link " href="/">Home</a>
                </li>

                @if (auth()->guard('masyarakat')->check())
                    <li class="nav-item">
                        <a class="nav-link " href="laporan">Laporan
                            Saya</a>
                    </li>
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <span class="d-none d-lg-inline-flex">{{ auth()->guard('masyarakat')->user()->name }}</span>
                    </a>
                @else
                    <li><a href="login">Login</a></li>
                @endif
                <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i
                                class="bi bi-box-arrow-right"></i>Logout</button>
                    </form>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
