@extends('front::layouts.master')

@section('title', $post->title)

@push('meta')
    <meta name="author" content="{{ cache('app_name') }}" />
    <meta name="description" content="{{ $post->subject }}" />
    <meta name="keywords" content="{{ $post->tags }}" />

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="{{ $post->subject }}" />
    <meta property="og:image" content="{{ $post->thumbnail ? url($post->thumbnail) : cache('default_logo_square') }}" />
    <meta property="og:site_name" content="{{ cache('app_name') }}" />
    <meta property="og:title" content="{{ cache('app_name') }} | {{ $post->title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ request()->url() }}" />

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="{{ request()->url() }}" />
    <meta name="twitter:creator" content="{{ cache('app_name') }}" />
    <meta name="twitter:title" content="{{ cache('app_name') }} | {{ $post->title }}" />
    <meta name="twitter:description" content="{{ $post->subject }}" />
    <meta name="twitter:image" content="{{ $post->thumbnail ? url($post->thumbnail) : cache('default_logo_square') }}" />
@endpush

@push('style')
    <link href="https://cdn.jsdelivr.net/npm/shareon@2/dist/shareon.min.css" rel="stylesheet">
@endpush

@section('content')
    <x-guest.breadcrumb pageTitle="Blog">
        <li><a href="{{ route('front.post.index') }}">Blog</a></li>
        <li><span>{{ $post->title }}</span></li>
    </x-guest.breadcrumb>


    <section class="main-content blog-posts blog-single">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-wrap">
                        <article class="post clearfix">
                            <div class="featured-post">
                                @if ($post->thumbnail)
                                    <img class="w-100" src="{{ url($post->thumbnail) }}" alt="{{ $post->title }}">
                                @endif
                                <ul class="post-comment">
                                    <li class="date">
                                        <span class="day pb-0"> {{ dateTimeTranslated($post->published_at, 'd') }} </span>
                                        <span class="month"> {{ dateTimeTranslated($post->published_at, 'M') }} </span>
                                    </li>
                                    <li class="comment">
                                        {{ dateTimeTranslated($post->published_at, 'Y') }}
                                    </li>
                                </ul>
                            </div>
                            <div class="content-post">
                                <h2 class="title-post">
                                    <a href="{{ route('front.post.show', $post->slug_title) }}">
                                        {{ $post->title }}
                                    </a>
                                </h2>
                                <ul class="meta-post clearfix">
                                    @if ($post->writer)
                                        <li class="author">
                                            <a>Oleh {{ $post->writer->name }}</a>
                                        </li>
                                    @endif

                                    @if ($post->category)
                                        <li class="categories">
                                            <a
                                               href="{{ route('front.post.index', ['category' => $post->category->slug_name]) }}">
                                                {{ $post->category->name }}
                                            </a>
                                        </li>
                                    @endif

                                    <li class="views">
                                        <a>{{ numberShortner($post->views_count) }} Kali</a>
                                    </li>
                                </ul>
                                <div class="entry excerpt">
                                    {!! $post->description !!}
                                </div>

                                <div class="row mt-5">
                                    <div class="col-md-6 mb-3 mb-md-0 align-self-center">
                                        <div class="d-flex flex-wrap">
                                            @foreach (explode(',', $post->tags) as $tag)
                                                <a class="badge badge-danger mr-1 mb-1"
                                                   href="{{ route('front.post.index', ['tag' => slug($tag)]) }}">
                                                    # {{ $tag }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="shareon text-center text-md-right" data-url="{{ request()->url() }}">
                                            <a class="facebook" data-title="{{ $post->title }}"
                                               data-media="{{ $post->thumbnail ? url($post->thumbnail) : cache('default_logo_square') }}"
                                               data-text="{{ $post->subject }}"></a>
                                            <a class="telegram" data-title="{{ $post->title }}"
                                               data-media="{{ $post->thumbnail ? url($post->thumbnail) : cache('default_logo_square') }}"
                                               data-text="{{ $post->subject }}"></a>
                                            <a class="twitter" data-title="{{ $post->title }}"
                                               data-media="{{ $post->thumbnail ? url($post->thumbnail) : cache('default_logo_square') }}"
                                               data-text="{{ $post->subject }}"></a>
                                            <a class="whatsapp" data-title="{{ $post->title }}"
                                               data-media="{{ $post->thumbnail ? url($post->thumbnail) : cache('default_logo_square') }}"
                                               data-text="{{ $post->subject }}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-md-4 p-relative">
                    <div class="sidebar sticky">
                        <div class="widget widget_search">
                            <form action="{{ route('adm.post.index') }}" method="get">
                                <input type="search" class="search-field text-dark" placeholder="Search …" name="search">
                            </form>
                        </div>

                        <div class="widget widget_categories">
                            <h5 class="widget-title">Kategori</h5>
                            <ul>
                                <li>
                                    <a class="post_meta" href="javascript:void(0)">
                                        Semua Kategori
                                    </a>
                                </li>
                                @foreach ($categories as $cat)
                                    <li>
                                        <a href="{{ route('front.post.index', ['category' => $cat->slug_name]) }}">
                                            {{ $cat->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <livewire:post.populars />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/shareon@2/dist/shareon.iife.js" defer init></script>
    <script>
        Shareon.init();
    </script>
@endpush
