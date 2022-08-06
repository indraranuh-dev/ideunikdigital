 <section class="flat-row parallax parallax2">
     <div class="overlay"></div>
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="title-section color-white">
                     <h1 class="title">{!! cache('front.team.title') !!}</h1>
                     <div class="sub-title">{{ cache('front.team.sub-title') }}</div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-12">
                 <div class="flat-testimonials" data-item="3" data-nav="false" data-dots="false" data-auto="false">
                     @foreach ($teams as $team)
                         <div class="testimonials style5 text-center">
                             @if ($team->media_path)
                                 <img src="{{ url($team->media_path) }}" alt="{{ $team->name }}">
                             @endif
                             <div class="avatar pl-0">
                                 <div class="name"><span>{{ $team->name }}</span></div>
                                 <div class="position">{{ $team->job_title }}</div>
                             </div>
                         </div>
                     @endforeach
                 </div>
             </div>
         </div>
     </div>
 </section>
