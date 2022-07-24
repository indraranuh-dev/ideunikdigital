@extends('front::layouts.master')

@section('content')
    <x-guest.breadcrumb pageTitle="Layanan">
        <li><span>Layanan</span></li>
    </x-guest.breadcrumb>

    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/about.png" alt="images">
                </div>

                <div class="col-md-6">
                    <div class="inner-box-about">

                        <div class="title-box">
                            <div class="title">WELCOME TO <span>ISEO</span></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et nisl massa. Nulla
                                hendrerit quam sed velit congue.</p>
                        </div>

                        <ul class="flat-list style2">
                            <li>Integrated Search (SEO & PPC)</li>
                            <li>Pay Per Click Management</li>
                            <li>Relevance, Authority & Trust</li>
                            <li>Search Engine Optimization</li>
                            <li>Best SEO Companies - September 2017</li>
                            <li>SEARCH ENGINE OPTIMIZATION COMPANIES</li>
                        </ul>
                        <div class="empty-space height30"></div>
                        <div><a href="#" class="flat-button border-radius-small">View More</a></div>

                    </div>
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
                            <h3>Try our 1 month days free services</h3>
                            <p>See how we optimize your site’s performances and grow your business!</p>
                        </div>
                        <div class="promobox-group-btn">
                            <a class="flat-button medium button-color button-radius black" href="{{ route('front.contact') }}">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
