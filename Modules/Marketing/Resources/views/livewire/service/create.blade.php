<div>
    @if (session()->has('success'))
        <x-alert state="primary" color="white" title="Sukses !" :message="session('success')" />
    @endif

    @if (session()->has('failed'))
        <x-alert state="warning" color="white" title="Gagal !" :message="session('failed')" />
    @endif

    'name',
    'slug_name',
    'logo',
    'header_image',
    'short_description',
    'description',
    'position',
    'is_active',
    'email',
    'whatsapp',
    'whatsapp_text',
    'address',
    'embed_maps',
    'cta_heading',
    'cta_sub_heading',
    'cta_button_text',
    <form wire:submit.prevent="store">

        <div class="row">
            <div class="col-md-3 mb-3 mb-md-0">
                <ul class="list-group sidebar">
                    <li class="list-group-item d-flex">
                        <i class="bx bx-info-circle font-18 align-middle me-2"></i>
                        <div>
                            <p>Keterangan Layanan</p>
                            <small>Anda bisa mengisi nama layanan, logo, header, deskripsi singkat dan deskripsi pada
                                form disamping.</small>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="form-group row">
                            <div class="col-4">
                                <label>Logo</label>
                                <livewire:image-upload :images="$logo" :oldImages="$logo" height="80px" />

                                @error('logo')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="name">Nama</label>
                                <input id="name" type="text" class="form-control" name="name"
                                       wire:model.defer="name">

                                @error('name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="slug_name">Slug</label>
                                <input id="slug_name" type="text" class="form-control" name="slug_name"
                                       wire:model.defer="slug_name">

                                @error('slug_name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input id="name" type="text" class="form-control" name="name"
                                   wire:model.defer="name">

                            @error('name')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="review">Ulasan</label>
                            <textarea id="review" type="text" class="form-control" name="review" wire:model.defer="review"
                                      style="height: 200px; resize: none"></textarea>

                            @error('review')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mb-3 mb-md-0">
                <ul class="list-group sidebar">
                    <li class="list-group-item d-flex">
                        <i class="bx bx-cog font-18 align-middle me-2"></i>
                        <div>
                            <p>Pengaturan proyek</p>
                            <small>Pengaturan kategori dan visibilitas untuk proyek</small>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="is_active"
                                       wire:model.defer="is_active">
                                <label class="form-check-label" for="is_active">
                                    Aktifkan di homepage?
                                </label>
                            </div>

                            @error('is_active')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </form>
</div>

<div class="text-end">
    <x-button state="dark" loadingState="true" wireTarget="store" text="Simpan" />
</div>
