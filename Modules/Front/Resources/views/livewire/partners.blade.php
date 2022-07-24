<section class="flat-row row-partners">
    <div class="container">
        <div class="title-section">
            <h1 class="title">Our <span>Clients</span></h1>
            <div class="sub-title">What You Get Using Our SEO Company’s</div>
        </div>

        <ul class="flat-client" data-item="6" data-nav="false" data-dots="false" data-auto="true">
            @foreach ($partners as $partner)
                @if ($partner->media_path)
                    <li>
                        <img alt="Thumbnail {{ title($partner->name) }}" src="{{ url($partner->media_path) }}" />
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</section>
