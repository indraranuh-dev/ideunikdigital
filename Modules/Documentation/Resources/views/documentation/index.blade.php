@extends("layouts.master")

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/app/css/additional.css') }}">
@endpush

@section('wrapper')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <x-breadcrumb pageTitle="Documentation">
                <x-slot name="link">
                    <x-breadcrumb.link active="true" pageTitle="Dokumentasi" />
                </x-slot>

                <x-slot name="button">
                    <div class="btn-group">
                        <x-button.create text="Dokumentasi" href="{{ route('adm.docs.create') }}" />
                        <x-button.trash href="{{ route('adm.docs.trash') }}" :totalTrash="$countTrash" />
                    </div>
                </x-slot>
            </x-breadcrumb>

            <x-blank-container>
                <livewire:documentation::table />
            </x-blank-container>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
@endpush
