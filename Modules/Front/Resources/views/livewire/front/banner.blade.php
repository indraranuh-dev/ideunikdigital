<div class="tp-banner-container" id="home">
    <div class="tp-banner">
        <ul>
            @foreach ($banners as $banner)
                <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="{{ $banner->desktop_media_path }}" alt="slider-image" />

                    @if ($banner->with_caption)
                        @if ($banner->caption_title)
                            <div class="tp-caption sfl title-slide color-white center" data-x="15" data-y="110"
                                 data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                                {{ $banner->caption_title }}
                            </div>
                        @endif

                        @if ($banner->caption_text)
                            <p></p>
                            <div class="tp-caption sfr desc-slide color-white center" data-x="15" data-y="250"
                                 data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                                {{ $banner->caption_text }}
                            </div>
                        @endif
                    @endif

                    @if ($banner->button_link)
                        <div class="tp-caption sfl flat-button-slider bg-button-slider-32bfc0" data-x="15"
                             data-y="360" data-speed="1000" data-start="2500" data-easing="Power3.easeInOut">
                            <a href="{{ $banner->button_link }}">{{ $banner->button_text }}</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i>
                        </div>
                    @endif
                </li>
            @endforeach

        </ul>
    </div>
</div>
