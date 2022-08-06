<div>
    @if (session()->has('success'))
        <x-alert state="primary" color="white" title="Sukses !" :message="session('success')" />
    @endif

    @if (session()->has('failed'))
        <x-alert state="warning" color="white" title="Gagal !" :message="session('failed')" />
    @endif

    <form wire:submit.prevent="update">

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
                            <div class="col-6">
                                <label>Logo</label>
                                <livewire:filepond.image propName="logo" :oldImages="$old_logo" />

                                @error('logo')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="name">Nama</label>
                                <input id="name" type="text" class="form-control" name="name"
                                       wire:model.lazy="name">

                                @error('name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="slug_name">Slug</label>
                                <input id="slug_name" type="text" class="form-control" name="slug_name"
                                       wire:model.lazy="slug_name">

                                @error('slug_name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="short_description">Deskripsi Singkat</label>
                            <textarea id="short_description" type="text" class="form-control" name="short_description"
                                      wire:model.defer="short_description" style="height: 80px; resize: none"></textarea>

                            @error('short_description')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <livewire:editor :value="$description" />

                            @error('description')
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
                            <p>Informasi layanan</p>
                            <small>Anda bisa mengisi email, whatsapp, teks whatshapp, alamat dan embed maps pada
                                form disamping.</small>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="form-group row">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="email">Email</label>
                                <input id="email" type="text" class="form-control" name="email"
                                       wire:model.defer="email">

                                @error('email')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="embed_maps">Embed Maps</label>
                                <input id="embed_maps" type="text" class="form-control" name="embed_maps"
                                       wire:model.defer="embed_maps">

                                @error('embed_maps')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="whatsapp">Whatsapp</label>
                                <input id="whatsapp" type="text" class="form-control" name="whatsapp"
                                       wire:model.defer="whatsapp">

                                @error('whatsapp')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="whatsapp_text">Pesan Whatsapp</label>
                                <input id="whatsapp_text" type="text" class="form-control" name="whatsapp_text"
                                       wire:model.defer="whatsapp_text">

                                @error('whatsapp_text')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <textarea id="address" type="text" class="form-control" name="address" wire:model.defer="address"
                                      style="height: 80px; resize: none"></textarea>

                            @error('address')
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
                            <p>Pengaturan layanan</p>
                            <small>Pengaturan kategori dan visibilitas untuk layanan</small>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body p-4">
                        {{-- <div class="form-group">
                            <div class="col-12">
                                <label>Gambar Header</label>


                                @error('header_image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="form-group row">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="cta_heading">CTA Heading</label>
                                <input id="cta_heading" type="text" class="form-control" name="cta_heading"
                                       wire:model.lazy="cta_heading">

                                @error('cta_heading')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="cta_button_text">CTA Button Text</label>
                                <input id="cta_button_text" type="text" class="form-control"
                                       name="cta_button_text" wire:model.lazy="cta_button_text">

                                @error('cta_button_text')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cta_sub_heading">CTA Sub Heading</label>
                            <textarea id="cta_sub_heading" type="text" class="form-control" name="cta_sub_heading"
                                      wire:model.defer="cta_sub_heading" style="height: 80px; resize: none"></textarea>

                            @error('cta_sub_heading')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>

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

                        <div class="text-end">
                            <x-button state="dark" loadingState="true" wireTarget="update" text="Simpan" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
