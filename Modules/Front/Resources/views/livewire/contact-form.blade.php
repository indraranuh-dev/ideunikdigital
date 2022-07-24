<section class="flat-row">
    <div class="container">
        <div class="title-section">
            <h1 class="title">Contact <span>Us</span></h1>
            <div class="sub-title">What You Get Using Our SEO Company’s</div>
        </div>

        <div class="row">
            <div class="col-md-5">
                <div>{!! cache('embed_maps') !!}</div>
            </div>

            <div class="col-md-7">
                @if (session()->has('success'))
                <div class="rounded-lg alert alert-primary border-0 bg-primary alert-dismissible fade show"
                     role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h6 class="mb-0 text-white">Selamat!</h6>
                    <p class="mb-0 text-white"> {{ session('success') }} </p>
                </div>
                @endif

                <form wire:submit.prevent="store">
                    <div class="form-group">
                        <label for="form.nama_lengkap">Nama lengkap</label>
                        <input class="rounded-lg" type="text" name="form.nama_lengkap" id="form.nama_lengkap"
                               wire:model.defer="form.nama_lengkap">

                        @error('form.nama_lengkap')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label for="form.email">Alamat email</label>
                            <input class="rounded-lg" type="text" name="form.email" id="form.email"
                                   wire:model.defer="form.email">

                            @error('form.email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="form.whatsapp">No. Whatsapp</label>
                            <input class="rounded-lg" type="text" name="form.whatsapp" id="form.whatsapp"
                                   wire:model.defer="form.whatsapp">

                            @error('form.whatsapp')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="form.pertanyaan">Pertanyaan</label>
                        <textarea class="rounded-lg" name="form.pertanyaan" id="form.pertanyaan" wire:model.defer="form.pertanyaan"></textarea>

                        @error('form.pertanyaan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger">
                            Kirim Pertanyaan
                            <div class="spinner-wrapper" wire:target="store" wire:loading>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
