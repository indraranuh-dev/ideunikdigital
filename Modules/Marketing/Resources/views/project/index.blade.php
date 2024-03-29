@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/app/css/additional.css') }}">
@endpush

@section('wrapper')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <x-breadcrumb pageTitle="Proyek">
                <x-slot name="link">
                    <x-breadcrumb.link active="true" pageTitle="Proyek" />
                </x-slot>

                <x-slot name="button">
                    <div class="btn-group">
                        <x-button.create text="Proyek" href="{{ route('adm.marketing.project.create') }}" />
                    </div>
                </x-slot>
            </x-breadcrumb>

            <x-blank-container>
                <livewire:marketing::project.table />
            </x-blank-container>
        </div>
    </div>
@endsection
