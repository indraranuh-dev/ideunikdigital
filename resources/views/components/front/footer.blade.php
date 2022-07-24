<div>
    <footer class="footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget widget-brand">
                            <div class="logo logo-footer">
                                <img src="{{ cache('default_logo_16_9') }}" alt="{{ cache('app_name') }}"
                                     style="width: 150px" />
                            </div>
                        </div>
                        <p>{{ cache('company_address') }}</p>
                    </div>

                    <div class="col-md-4">
                        <div class="widget widget-services clearfix">
                            <h5 class="widget-title">Halaman</h5>
                            <ul class="one-half">
                                <li><a href="{{ route('front.index') }}">Beranda</a></li>
                                <li><a href="{{ route('front.about') }}">Tentang Kami</a></li>
                                <li><a href="{{ route('front.service.index') }}">Layanan</a></li>
                            </ul>
                            <ul class="one-half">
                                <li><a href="{{ route('front.project') }}">Proyek</a></li>
                                <li><a href="{{ route('front.contact') }}">Hubungi Kami</a></li>
                                <li><a href="{{ route('front.post.index') }}">Blog</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 pl-md-5">
                        <div class="widget widget-social">
                            <h5 class="widget-title">Follow Us</h5>
                            <div class="social-list">
                                <a href="{{ cache('facebook_link') }}">
                                    <img src="{{ asset('assets/front/images/facebook.svg') }}" alt="image">
                                </a>
                                <a href="{{ cache('twitter_link') }}">
                                    <img src="{{ asset('assets/front/images/twitter.svg') }}" alt="image">
                                </a>
                                <a href="{{ cache('youtube_link') }}">
                                    <img src="{{ asset('assets/front/images/youtube.svg') }}" alt="image">
                                </a>
                            </div>
                            <a class="email" href="mailot:{{ cache('email') }}">{{ cache('email') }}</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>{{ cache('copyright') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a class="go-top">
        <i class="fa fa-angle-up"></i>
    </a>
</div>
