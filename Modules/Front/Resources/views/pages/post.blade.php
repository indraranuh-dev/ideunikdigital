@extends('front::layouts.master')

@section('title', cache('seo.post.title'))

@push('meta')
    <meta name="author" content="{{ cache('app_name') }}" />
    <meta name="description" content="{{ cache('seo.post.description') }}" />
    <meta name="keywords" content="{{ cache('seo.keywords') }}" />

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="{{ cache('seo.post.description') }}" />
    <meta property="og:image"
          content="{{ cache('default_logo_square') ? url(cache('default_logo_square')) : 'https://via.placeholder.com/600x400/181818/ddd?text=' . cache('app_name') . '.com' }}" />
    <meta property="og:site_name" content="{{ cache('app_name') }}" />
    <meta property="og:title" content="{{ cache('app_name') }} | {{ cache('seo.post.title') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ request()->url() }}" />

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="{{ request()->url() }}" />
    <meta name="twitter:creator" content="{{ cache('app_name') }}" />
    <meta name="twitter:title" content="{{ cache('app_name') }} | {{ cache('seo.post.title') }}" />
    <meta name="twitter:description" content="{{ cache('seo.post.description') }}" />
    <meta name="twitter:image"
          content="{{ cache('default_logo_square') ? url(cache('default_logo_square')) : 'https://via.placeholder.com/600x400/181818/ddd?text=' . cache('app_name') . '.com' }}" />
@endpush

@section('content')
    <x-guest.breadcrumb pageTitle="Blog">
        <li><span>Blog</span></li>
    </x-guest.breadcrumb>

    <livewire:front::posts />
@endsection
