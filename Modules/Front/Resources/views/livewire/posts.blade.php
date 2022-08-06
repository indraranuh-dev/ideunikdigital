<section class="main-content blog-posts">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div class="post-wrap">
                    @foreach ($posts as $post)
                        <article class="post clearfix">
                            <div class="featured-post">
                                @if ($post->thumbnail)
                                    <img class="w-100" src="{{ url($post->thumbnail) }}" alt="{{ $post->title }}">
                                @endif

                                <ul class="post-comment">
                                    <li class="date">
                                        <span class="day pb-0"> {{ dateTimeTranslated($post->published_at, 'd') }}
                                        </span>
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
                                            <a href="javascript:void(0)"
                                               onclick="window.scrollTo({ top: 0, behavior: 'smooth' });"
                                               wire:click="$set('category', '{{ $post->category->slug_name }}')">
                                                {{ $post->category->name }}
                                            </a>
                                        </li>
                                    @endif

                                    <li class="views">
                                        <a>{{ numberShortner($post->views_count) }} Kali</a>
                                    </li>
                                </ul>
                                <div class="entry-post excerpt">
                                    <p>{{ $post->subject }} </p>
                                    <div class="more-link"><a
                                           href="{{ route('front.post.show', $post->slug_title) }}">Lanjutkan Baca</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
                {{ $posts->links('livewire::custom') }}
            </div>

            <div class="col-md-4 p-relative">
                <div class="sidebar sticky">
                    <div class="widget widget_search">
                        <input type="search" class="search-field text-dark" placeholder="Search …"
                               wire:model.lazy="search">
                    </div>

                    <div class="widget widget_categories">
                        <h5 class="widget-title">Kategori</h5>
                        <ul>
                            <li>
                                <a class="{{ !$category ? 'post_meta' : null }}" href="javascript:void(0)"
                                   onclick="window.scrollTo({ top: 0, behavior: 'smooth' });"
                                   wire:click="$set('category', null)">
                                    Semua Kategori
                                </a>
                            </li>
                            @foreach ($categories as $cat)
                                <li>
                                    <a href="javascript:void(0)"
                                       class="{{ $cat->slug_name == $category ? 'post_meta' : null }}"
                                       onclick="window.scrollTo({ top: 0, behavior: 'smooth' });"
                                       wire:click="$set('category', '{{ $cat->slug_name }}')">
                                        {{ $cat->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
