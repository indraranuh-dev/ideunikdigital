@extends('front::layouts.master')

@section('content')
    <x-guest.breadcrumb pageTitle="Layanan">
        <li><span>Layanan</span></li>
    </x-guest.breadcrumb>

    <livewire:front::services />

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
