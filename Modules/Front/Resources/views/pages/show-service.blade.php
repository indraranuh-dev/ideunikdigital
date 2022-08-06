@extends('front::layouts.master')

@section('title', $service->name)

@push('meta')
    <meta name="author" content="{{ cache('app_name') }}" />
    <meta name="description" content="{{ $service->short_description }}" />
    <meta name="keywords" content="{{ cache('seo.keywords') }}" />

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="{{ $service->short_description }}" />
    <meta property="og:image" content="{{ $service->logo ? url($service->logo) : cache('default_logo_square') }}" />
    <meta property="og:site_name" content="{{ cache('app_name') }}" />
    <meta property="og:title" content="{{ cache('app_name') }} | {{ $service->name }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ request()->url() }}" />

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="{{ request()->url() }}" />
    <meta name="twitter:creator" content="{{ cache('app_name') }}" />
    <meta name="twitter:title" content="{{ cache('app_name') }} | {{ $service->name }}" />
    <meta name="twitter:description" content="{{ $service->short_description }}" />
    <meta name="twitter:image" content="{{ $service->logo ? url($service->logo) : cache('default_logo_square') }}" />
@endpush

@section('content')
    <x-guest.breadcrumb pageTitle="{{ $service->name }}">
        <li><a href="{{ route('front.service.index') }}">Layanan</a></li>
        <li><span>{{ $service->name }}</span></li>
    </x-guest.breadcrumb>

    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    @if ($service->logo)
                        <img class="mb-3" src="{{ url($service->logo) }}" alt="icon">
                    @endif
                </div>

                <div class="col-md-8">
                    {!! $service->description !!}
                </div>
            </div>
        </div>
    </section>

    <section class="flat-row background-theme row-promobox">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-promobox style1 color-white">
                        <div class="promobox-group-content">
                            <h3>{{ $service->cta_heading }}</h3>
                            <p>{{ $service->cta_sub_heading }}</p>
                        </div>
                        <div class="promobox-group-btn">
                            <a class="flat-button medium button-color button-radius black"
                               href="https://wa.me/{{ $service->whatsapp }}?text={{ $service->whatsapp_text }}">
                                {{ $service->cta_button_text }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
