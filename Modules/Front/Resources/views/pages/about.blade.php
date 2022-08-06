@extends('front::layouts.master')

@section('title', cache('seo.about.title'))

@push('meta')
    <meta name="author" content="{{ cache('app_name') }}" />
    <meta name="description" content="{{ cache('seo.about.description') }}" />
    <meta name="keywords" content="{{ cache('seo.keywords') }}" />

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="{{ cache('seo.about.description') }}" />
    <meta property="og:image"
          content="{{ cache('default_logo_square') ? url(cache('default_logo_square')) : 'https://via.placeholder.com/600x400/181818/ddd?text=' . cache('app_name') . '.com' }}" />
    <meta property="og:site_name" content="{{ cache('app_name') }}" />
    <meta property="og:title" content="{{ cache('app_name') }} | {{ cache('seo.about.title') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('front.about') }}" />

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="{{ route('front.about') }}" />
    <meta name="twitter:creator" content="{{ cache('app_name') }}" />
    <meta name="twitter:title" content="{{ cache('app_name') }} | {{ cache('seo.about.title') }}" />
    <meta name="twitter:description" content="{{ cache('seo.about.description') }}" />
    <meta name="twitter:image"
          content="{{ cache('default_logo_square') ? url(cache('default_logo_square')) : 'https://via.placeholder.com/600x400/181818/ddd?text=' . cache('app_name') . '.com' }}" />
@endpush

@section('content')
    <x-guest.breadcrumb pageTitle="Tentang Kami">
        <li><span>Tentang Kami</span></li>
    </x-guest.breadcrumb>

    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section">
                        <h1 class="title">Tentang Kami</h1>
                    </div>
                </div>
            </div>
            {!! cache('front.about.description') !!}
        </div>
    </section>

    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section">
                        <h2 class="title">Visi Misi</h2>
                    </div>
                </div>
            </div>
            {!! cache('front.about.visimisi') !!}
        </div>
    </section>

    <livewire:front::teams />
@endsection
