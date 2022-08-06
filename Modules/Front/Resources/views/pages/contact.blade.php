@extends('front::layouts.master')

@section('title', cache('seo.contact.title'))

@push('meta')
    <meta name="author" content="{{ cache('app_name') }}" />
    <meta name="description" content="{{ cache('seo.contact.description') }}" />
    <meta name="keywords" content="{{ cache('seo.keywords') }}" />

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="{{ cache('seo.contact.description') }}" />
    <meta property="og:image"
          content="{{ cache('default_logo_square') ? url(cache('default_logo_square')) : 'https://via.placeholder.com/600x400/181818/ddd?text=' . cache('app_name') . '.com' }}" />
    <meta property="og:site_name" content="{{ cache('app_name') }}" />
    <meta property="og:title" content="{{ cache('app_name') }} | {{ cache('seo.contact.title') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ request()->url() }}" />

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="{{ request()->url() }}" />
    <meta name="twitter:creator" content="{{ cache('app_name') }}" />
    <meta name="twitter:title" content="{{ cache('app_name') }} | {{ cache('seo.contact.title') }}" />
    <meta name="twitter:description" content="{{ cache('seo.contact.description') }}" />
    <meta name="twitter:image"
          content="{{ cache('default_logo_square') ? url(cache('default_logo_square')) : 'https://via.placeholder.com/600x400/181818/ddd?text=' . cache('app_name') . '.com' }}" />
@endpush

@section('content')
    <x-guest.breadcrumb pageTitle="Hubungi Kami">
        <li><span>Hubungi Kami</span></li>
    </x-guest.breadcrumb>


    <section class="flat-row row-nopading">
        <div class="container">
            <div class="row">
                @if (is_object(cache('services')))
                    @foreach (cache('services') as $service)
                        <div class="flat-on-three">
                            <div class="flat-contact-info text-center" style="height: 100%">
                                @if ($service->logo)
                                    <img class="mb-3" style="height: 130px" src="{{ url($service->logo) }}"
                                         alt="icon">
                                @endif
                                <h4>{{ $service->name }}</h4>

                                @if ($service->email)
                                    <h6 class="text-secondary">
                                        <a href="mailto:{{ $service->email }}">
                                            <span class="text-dark">Email:</span> {{ $service->email }}
                                        </a>
                                    </h6>
                                @endif

                                @if ($service->whatsapp)
                                    <h6 class="text-secondary">
                                        <a
                                           href="https://wa.me/{{ $service->whatsapp }}?text={{ $service->whatsapp_text }}">
                                            <span class="text-dark">Whatsapp:</span> {{ $service->whatsapp }}
                                        </a>
                                    </h6>
                                @endif

                                @if ($service->address)
                                    <h6 class="text-secondary">
                                        {{ $service->address }}
                                    </h6>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <livewire:front::contact-form />
@endsection
