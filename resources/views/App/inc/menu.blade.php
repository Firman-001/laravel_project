<!-- Sidebar -->
<aside class="navbar navbar-horizontal navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <h1 class="navbar-brand navbar-brand-autobdark">
            <a href=".">
                <img src="{{ asset('assets/static/logo.svg') }}" width="110" height="32" alt="Tabler"
                    class="navbar-brand-image">
            </a>
        </h1>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <span class="nav-link-title">
                            dashboard
                        </span>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('signup') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('signup') }}">
                        <span class="nav-link-title">
                            forum diskusi
                        </span>
                    </a>
                </li>
                <li class="nav-item dropdown {{ request()->routeIs('help') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span class="nav-link-title">
                            Help
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">
                            Documentation
                        </a>
                        <a class="dropdown-item" href="#">
                            Changelog
                        </a>
                        <a class="dropdown-item" href="#">
                            Source code
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</aside>
