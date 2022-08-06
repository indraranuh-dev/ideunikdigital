@extends('front::layouts.master')

@section('title', cache('seo.service.title'))

@push('meta')
    <meta name="author" content="{{ cache('app_name') }}" />
    <meta name="description" content="{{ cache('seo.service.description') }}" />
    <meta name="keywords" content="{{ cache('seo.keywords') }}" />

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="{{ cache('seo.service.description') }}" />
    <meta property="og:image"
          content="{{ cache('default_logo_square') ? url(cache('default_logo_square')) : 'https://via.placeholder.com/600x400/181818/ddd?text=' . cache('app_name') . '.com' }}" />
    <meta property="og:site_name" content="{{ cache('app_name') }}" />
    <meta property="og:title" content="{{ cache('app_name') }} | {{ cache('seo.service.title') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ request()->url() }}" />

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="{{ request()->url() }}" />
    <meta name="twitter:creator" content="{{ cache('app_name') }}" />
    <meta name="twitter:title" content="{{ cache('app_name') }} | {{ cache('seo.service.title') }}" />
    <meta name="twitter:description" content="{{ cache('seo.service.description') }}" />
    <meta name="twitter:image"
          content="{{ cache('default_logo_square') ? url(cache('default_logo_square')) : 'https://via.placeholder.com/600x400/181818/ddd?text=' . cache('app_name') . '.com' }}" />
@endpush

@section('content')
    <x-guest.breadcrumb pageTitle="Layanan">
        <li><span>Layanan</span></li>
    </x-guest.breadcrumb>

    <livewire:front::services />

    <section class="flat-row background-theme row-promobox">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-promobox style1 color-white">
                        <div class="promobox-group-content">
                            <h3>{{ cache('contact_small_heading') }}</h3>
                            <p>{{ cache('contact_small_description') }}</p>
                        </div>
                        <div class="promobox-group-btn">
                            <a class="flat-button medium button-color button-radius black"
                               href="{{ route('front.contact') }}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
