<section class="flat-row">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="title-section">
                    <h1 class="title">{!! cache('front.service.title') !!}</h1>
                    <div class="sub-title">{{ cache('front.service.sub-title') }}</div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            @foreach ($services as $service)
                <div class="col-md-4">
                    <div class="iconbox center circle">
                        <div class="box-header">
                            @if ($service->logo)
                                <img style="height: 130px" src="{{ url($service->logo) }}" alt="icon">
                            @endif
                            <div class="box-title">
                                <a href="{{ route('front.service.show', $service->slug_name) }}">
                                    {{ $service->name }}
                                </a>
                            </div>
                        </div>
                        <div class="box-content">{{ $service->short_description }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
