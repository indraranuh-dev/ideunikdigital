<div class="page-title parallax parallax1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">{{ $pageTitle }}</h1>
                </div>
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="{{ route('front.index') }}">Beranda</a></li>
                        {{ $slot }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
