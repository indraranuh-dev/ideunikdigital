@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/app/css/additional.css') }}">
@endpush

@section('wrapper')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <x-breadcrumb pageTitle="Tim">
                <x-slot name="link">
                    <x-breadcrumb.link active="true" pageTitle="Tim" />
                </x-slot>

                <x-slot name="button">
                    <div class="btn-group">
                        <x-button.create text="Tim" href="{{ route('adm.marketing.team.create') }}" />
                    </div>
                </x-slot>
            </x-breadcrumb>

            <x-blank-container>
                <livewire:marketing::team.table />
            </x-blank-container>
        </div>
    </div>
@endsection
