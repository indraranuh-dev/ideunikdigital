<div>
    @if ($isHomepage)

        <section class="flat-row" id="work">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="title-section">
                        <h1 class="title">{!! cache('front.portfolio.title') !!}</h1>
                        <div class="sub-title">{{ cache('front.portfolio.sub-title') }}</div>
                    </div>
                </div>
            </div>

            <div class="flat-portfolio v4">
                <div class="portfolio-wrap clearfix" id="lightgallery">
                    @foreach ($projects as $project)
                        <div class="item builder painting" data-src="{{ url($project->thumbnail) }}"
                             style="cursor: pointer"data-sub-html="#caption-{{ $loop->iteration }}">
                            <div class="featured-images">
                                @if ($project->thumbnail)
                                    <img src="{{ url($project->thumbnail) }}" alt="{{ $project->name }}">
                                @endif
                                <div class="project-title" style="top: unset; bottom: 10px"
                                     id="caption-{{ $loop->iteration }}">
                                    <h3 class="mb-0"><a>{{ $project->name }}</a></h3>
                                    <div class="project-redmore">
                                        <p class="mb-0 text-white" style="opacity: .75">{{ $project->description }}</p>
                                    </div>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @else
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="portfolio-filter style1">
                        <li class="{{ !$kategori ? 'active' : null }}">
                            <a class="text-dark" wire:click="$set('kategori', null)" href="javascript:void(0)">
                                All Projects
                            </a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="{{ $kategori == $category->slug_name ? 'active' : null }}">
                                <a class="text-dark" wire:click="find('{{ $category->slug_name }}')"
                                   href="javascript:void(0)">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-12">
                    <div class="flat-portfolio grid-3columns">
                        <div class="portfolio-wrap clearfix" id="lightgallery">

                            @foreach ($projects as $project)
                                <div class="item {{ $project->category ? $project->category->slug_name : null }} builder painting"
                                     data-src="{{ url($project->thumbnail) }}" style="cursor: pointer"
                                     data-sub-html="#caption-{{ $loop->iteration }}">
                                    <div class="featured-images">
                                        @if ($project->thumbnail)
                                            <img src="{{ url($project->thumbnail) }}" alt="{{ $project->name }}">
                                        @endif
                                        <div class="project-title" style="top: unset; bottom: 10px"
                                             id="caption-{{ $loop->iteration }}">
                                            <h3 class="mb-0"><a>{{ $project->name }}</a></h3>
                                            <div class="project-redmore">
                                                <p class="mb-0 text-white" style="opacity: .75">
                                                    {{ $project->description }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="overlay"></div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="text-center">
                        <button class="flat-button medium button-color button-radius" style="height: unset"
                                wire:click="loadMore">
                            Muat lainnya
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <script>
        function init() {
            if ($('#lightgallery').length > 0) {
                lightGallery(document.getElementById('lightgallery'), {
                    plugins: [lgZoom, lgThumbnail],
                    speed: 500,
                });
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            init()
        })

        document.addEventListener('init-gallery', function() {
            // console.log('init')
            lightGallery().destroy(true);
            init()
        })
    </script>
</div>
