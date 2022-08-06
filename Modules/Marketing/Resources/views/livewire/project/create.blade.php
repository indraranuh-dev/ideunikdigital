<div>
    @if (session()->has('success'))
        <x-alert state="primary" color="white" title="Sukses !" :message="session('success')" />
    @endif

    @if (session()->has('failed'))
        <x-alert state="warning" color="white" title="Gagal !" :message="session('failed')" />
    @endif

    <form wire:submit.prevent="store">

        <div class="row">
            <div class="col-md-3 mb-3 mb-md-0">
                <ul class="list-group sidebar">
                    <li class="list-group-item d-flex">
                        <i class="bx bx-info-circle font-18 align-middle me-2"></i>
                        <div>
                            <p>Keterangan Proyek</p>
                            <small>Anda bisa mengisi nama proyek, logo, header, deskripsi singkat dan deskripsi pada
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
                                <label>Gambar proyek</label>
                                <livewire:filepond.image />

                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input id="name" type="text" class="form-control" name="name"
                                   wire:model.lazy="name">

                            @error('name')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="service">Layanan</label>
                                <select name="service" id="service" class="form-control" wire:model.defer="service">
                                    <option value="">Pilih Layanan</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                    @endforeach
                                </select>
                                @error('service')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="category">Kategori</label>
                                <select name="category" id="category" class="form-control" wire:model.defer="category">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Deskripsi Singkat</label>
                            <textarea id="description" type="text" class="form-control" name="description" wire:model.defer="description"
                                      style="height: 80px; resize: none"></textarea>

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

                        <div class="text-end">
                            <x-button state="dark" loadingState="true" wireTarget="store" text="Simpan" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
