<div class="widget widget-recent-news">
    <h5 class="widget-title">Blog Terpopuler</h5>
    <ul class="popular-news clearfix">

        @foreach ($populars as $post)
            <li>
                <div class="thumb">
                    @if ($post->thumbnail)
                        <img src="{{ url($post->thumbnail) }}" alt="{{ $post->title }}">
                    @endif
                </div>
                <div class="text">
                    <h6>
                        <a href="{{ route('front.post.show', $post->slug_title) }}">{{ $post->title }}</a>
                    </h6>
                    <a class="post_meta">{{ dateTimeTranslated($post->published_at) }}</a>
                </div>
            </li>
        @endforeach
    </ul>
</div>
