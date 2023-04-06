<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ Request::is('/dashboard') ? 'active' : '' }}" href="/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
            {{-- @can('admin') --}}
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/user') ? 'active' : '' }}" href="/user">
                    <i class="bi bi-card-list"></i>
                    <span>Register</span>
                </a>
            </li>
        {{-- @endcan --}}
    </ul>
</aside>
