@extends('front::layouts.master')

@section('title', cache('seo.index.title'))

@push('meta')
    <meta name="author" content="{{ cache('app_name') }}" />
    <meta name="description" content="{{ cache('seo.index.description') }}" />
    <meta name="keywords" content="{{ cache('seo.keywords') }}" />

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="{{ cache('seo.index.description') }}" />
    <meta property="og:image"
          content="{{ cache('default_logo_square') ? url(cache('default_logo_square')) : 'https://via.placeholder.com/600x400/181818/ddd?text=' . cache('app_name') . '.com' }}" />
    <meta property="og:site_name" content="{{ cache('app_name') }}" />
    <meta property="og:title" content="{{ cache('app_name') }} | {{ cache('seo.index.title') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ request()->url() }}" />

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="{{ request()->url() }}" />
    <meta name="twitter:creator" content="{{ cache('app_name') }}" />
    <meta name="twitter:title" content="{{ cache('app_name') }} | {{ cache('seo.index.title') }}" />
    <meta name="twitter:description" content="{{ cache('seo.index.description') }}" />
    <meta name="twitter:image"
          content="{{ cache('default_logo_square') ? url(cache('default_logo_square')) : 'https://via.placeholder.com/600x400/181818/ddd?text=' . cache('app_name') . '.com' }}" />
@endpush

@section('content')
    <livewire:front::front.banner />

    <livewire:front::services />
    <livewire:front::projects :homepage="true" />
    <livewire:front::partners />
    <livewire:front::contact-form />
    {{-- <section class="flat-row latest-blog" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section">

                        <h1 class="title">Blog <span>Terbaru</span></h1>
                        <div class="sub-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias, atque?
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="blog-shortcode blog-carosuel-wrap">
                        <div class="blog-carosuel">
                            <article class="post clearfix">
                                <div class="featured-post">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('assets/front/images/blog/blog13.jpg') }}" alt="image">

                                </div>
                                <div class="content-post">
                                    <div class="post-category">
                                        <i class="fa fa-file-video-o"></i>
                                    </div>

                                    <h2 class="title-post"><a href="blog-single.html">How to Create Contents That
                                            Get Traffic</a></h2>
                                    <ul class="meta-post clearfix">
                                        <li class="author">
                                            <a href="#">By Admin</a>
                                        </li>
                                        <li class="categories">
                                            <a href="#">Makerting</a>, <a href="#">Seo</a>
                                        </li>
                                        <li class="vote">
                                            <a href="#">16</a>
                                        </li>
                                    </ul>
                                    <div class="entry-post excerpt">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                        </p>
                                        <a class="read-more" href="blog-single.html">
                                            Continue reading
                                        </a>
                                    </div>
                                </div>
                            </article>

                            <article class="post clearfix">
                                <div class="featured-post">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('assets/front/images/blog/blog-gr1.jpg') }}" alt="image">

                                </div>
                                <div class="content-post">
                                    <div class="post-category">
                                        <i class="fa fa-file-image-o"></i>
                                    </div>

                                    <h2 class="title-post"><a href="blog-single.html">10 Marketing Blogs You Should
                                            be Reading</a></h2>
                                    <ul class="meta-post clearfix">
                                        <li class="author">
                                            <a href="#">By Admin</a>
                                        </li>
                                        <li class="categories">
                                            <a href="#">Business</a>, <a href="#">Marketing</a>
                                        </li>
                                        <li class="vote">
                                            <a href="#">16</a>
                                        </li>
                                    </ul>
                                    <div class="entry-post excerpt">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                        </p>
                                        <a class="read-more" href="blog-single.html">
                                            Continue reading
                                        </a>
                                    </div>
                                </div>
                            </article>

                            <article class="post clearfix">
                                <div class="featured-post">
                                    <div class="overlay"></div>
                                    <img src="{{ asset('assets/front/images/blog/blog-gr2.jpg') }}" alt="image">

                                </div>
                                <div class="content-post">
                                    <div class="post-category">
                                        <i class="fa fa-file-audio-o"></i>

                                    </div>
                                    <h2 class="title-post"><a href="blog-single.html">Make Users Fall in Love With
                                            Your Website</a></h2>
                                    <ul class="meta-post clearfix">
                                        <li class="author">
                                            <a href="#">By Admin</a>
                                        </li>
                                        <li class="categories">
                                            <a href="#">Website</a>, <a href="#">Seo</a>
                                        </li>
                                        <li class="vote">
                                            <a href="#">16</a>
                                        </li>
                                    </ul>
                                    <div class="entry-post excerpt">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                        </p>
                                        <a class="read-more" href="blog-single.html">
                                            Continue reading </a>
                                    </div>
                                </div>
                            </article>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection


@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
            integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            document.addEventListener('init-select', function(data) {
                $('[data-searchable]').select2({
                    theme: 'bootstrap',
                });
            });
        })
    </script>
@endpush
