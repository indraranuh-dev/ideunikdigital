@extends('front::layouts.master')

@section('content')
    <div class="page-title parallax parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading">
                        <h1 class="title">Hubungi Kami</h1>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="{{ route('front.index') }}">Beranda</a></li>
                            <li><a href="{{ route('front.contact') }}">Hubungi Kami</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="flat-row row-nopading">
        <div class="container">
            <div class="row">
                <div class="flat-on-three">
                    <div class="flat-contact-info text-center" style="height: 100%">
                        <i class="icon-call-in icons"></i>
                        <h4>Telp.</h4>
                        <h6><a class="text-gray" href="tel:+{{ cache('phone') }}">Telp.: {{ cache('phone') }}</a></h6>
                    </div>
                </div>

                <div class="flat-on-three">
                    <div class="flat-contact-info text-center" style="height: 100%">
                        <i class="icon-direction icons"></i>
                        <h4>Alamat</h4>
                        <h6><a class="text-gray">{{ cache('company_address') }}</a></h6>
                    </div>
                </div>

                <div class="flat-on-three">
                    <div class="flat-contact-info text-center" style="height: 100%">
                        <i class="icon-envelope-letter icons"></i>
                        <h4>Email</h4>
                        <h6><a class="text-gray" href="mailto:{{ cache('email') }}">{{ cache('email') }}</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="title-box">
                        <div class="title">Lokasi Kami</div>
                    </div>
                    <div>{!! cache('embed_maps') !!}</div>
                </div>

                <div class="col-md-7">
                    <div class="title-box">
                        <div class="title">Punya Pertanyaan?</div>
                    </div>

                    <form id="contactform" class="flat-contact-form style2 bg-dark height-small" method="post"
                          action="">
                        <div class="field clearfix">
                            <div class="wrap-type-input">
                                <div class="input-wrap name">
                                    <input type="text" value="" tabindex="1" placeholder="Name" name="name"
                                           id="name" required>
                                </div>
                                <div class="input-wrap email">
                                    <input type="email" value="" tabindex="2" placeholder="Email" name="email"
                                           id="email" required>
                                </div>
                            </div>
                            <div class="textarea-wrap">
                                <textarea class="type-input" tabindex="3" placeholder="Message" name="message" id="message-contact" required></textarea>
                            </div>
                        </div>
                        <div class="submit-wrap">
                            <button class="flat-button bg-theme">Send Your Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="flat-row background-theme row-promobox">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-promobox style1 color-white">
                        <div class="promobox-group-content">
                            <h3><span>Try our 1 month days free services</span></h3>
                            <p>See how we optimize your site’s performances and grow your business!</p>
                        </div>
                        <div class="promobox-group-btn">
                            <a class="flat-button medium button-color button-radius white" href="#">Read More</a>
                            <a class="flat-button medium button-color button-radius black" href="#">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
