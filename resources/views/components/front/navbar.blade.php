<nav class="navbar sticky-top navbar-expand-lg navbar-light py-3 bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('front.index') }}" rel="beranda">
            <img src="{{ cache('default_logo_16_9') }}" alt="Logo" style="height: 40px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ activeRouteIs('front.index', 'active') }}">
                    <a class="nav-link" href="{{ route('front.index') }}">Beranda</a>
                </li>
                <li class="nav-item {{ activeRouteIs('front.about', 'active') }}">
                    <a class="nav-link" href="{{ route('front.about') }}">Tentang Kami</a>
                </li>
                <li class="nav-item dropdown {{ activeRouteIs('front.service.*', 'active') }}">
                    <a class="nav-link dropdown-toggle" href="{{ route('front.service.index') }}" role="button"
                       data-toggle="dropdown" aria-expanded="false">Layanan</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item {{ activeRouteIs('front.project.*', 'active') }}">
                    <a class="nav-link" href="{{ route('front.project') }}">Proyek</a>
                </li>
                <li class="nav-item {{ activeRouteIs('front.contact', 'active') }}">
                    <a class="nav-link" href="{{ route('front.contact') }}">Hubungi Kami</a>
                </li>
                <li class="nav-item {{ activeRouteIs('front.post.*', 'active') }}">
                    <a class="nav-link" href="{{ route('front.post.index') }}">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
