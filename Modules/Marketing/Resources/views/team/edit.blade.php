@extends('layouts.master')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/app/css/additional.css') }}">

    {{-- Filepond --}}
    <link href="{{ asset('vendor/filepond/css/filepond.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/filepond/plugins/image-preview/filepond-plugin-image-preview.min.css') }}"
          rel="stylesheet" />
    <link href="{{ asset('vendor/filepond/plugins/file-poster/filepond-plugin-file-poster.min.css') }}" rel="stylesheet" />

    {{-- Summernote --}}
    <link href="{{ asset('vendor/summernote/css/summernote-lite.min.css') }}" rel="stylesheet">
@endpush

@section('wrapper')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <x-breadcrumb pageTitle="Tim">
                <x-slot name="link">
                    <x-breadcrumb.link href="{{ route('adm.marketing.team.index') }}" pageTitle="Tim" />
                    <x-breadcrumb.link active="true" pageTitle="Edit" />
                </x-slot>

                <x-slot name="button">
                    <x-button.back href="{{ route('adm.marketing.team.index') }}" />
                </x-slot>
            </x-breadcrumb>

            <x-blank-container class="justify-content-center">
                <livewire:marketing::team.edit :team="$team" />
            </x-blank-container>
        </div>
    </div>
@endsection

@push('script')
    {{-- Summernote --}}
    <script src="{{ asset('vendor/summernote/js/summernote-lite.min.js') }}"></script>

    {{-- Filepond --}}
    <script src="{{ asset('vendor/filepond/js/filepond.js') }}"></script>
    <script src="{{ asset('vendor/filepond/plugins/image-preview/filepond-plugin-image-preview.min.js') }}"></script>
    <script src="{{ asset('vendor/filepond/plugins/file-poster/filepond-plugin-file-poster.min.js') }}"></script>
    <script src="{{ asset('vendor/filepond/plugins/jquery/filepond.jquery.js') }}"></script>

    <script src="{{ asset('assets/app/js/additional.js') }}"></script>
@endpush
