<x-base-layout2>
    <x-slot name="header">
        {{ __('Tambah') }}
    </x-slot>

    <x-main-container>
        <x-slot name="title">
            {{ __("Tambah Paket Destinasi") }}
        </x-slot>
        <x-slot name="titleInfo">
            {{ __("Tambah") }}
        </x-slot>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form bg-white" style="padding: 30px;">
                    <x-jet-validation-errors class="mb-3 rounded-0" />
                    <x-action-message />
                    <form method="POST" action="{{ route('admin.destination.packet.store',$destination->slug) }}" enctype="multipart/form-data"
                        novalidate="novalidate">
                        @csrf

                        <div class="form-group">
                            <x-jet-input type="hidden" name="destination_id"
                                :value="old('destination_id',$destination->id)" />
                            <x-jet-label value="{{ __('Nama Paket') }}" />

                            <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Masukkan Nama Paker Destinasi" type="text" name="name"
                                :value="old('name')" required />
                            <x-jet-input-error for="name"></x-jet-input-error>
                        </div>

                        <div class="form-group">
                            <x-jet-label value="{{ __('Jumlah Hari') }}" />

                            <x-jet-input class="{{ $errors->has('days') ? 'is-invalid' : '' }}" placeholder="Masukkan Jumlah hari Paket Destinasi" min="1" type="number" name="days"
                                :value="old('days',1)" required />
                            <x-jet-input-error for="days"></x-jet-input-error>
                        </div>

                        <div class="form-group">
                            <x-jet-label value="{{ __('Jumlah Orang') }}" />

                            <x-jet-input class="{{ $errors->has('people') ? 'is-invalid' : '' }}" placeholder="Masukkan Jumlah Orang Paket Destinasi" min="1" type="number" name="people"
                                :value="old('people',1)" required />
                            <x-jet-input-error for="people"></x-jet-input-error>
                        </div>

                        <div class="form-group">
                            <x-jet-label value="{{ __('Harga') }}" />

                            <x-jet-input class="{{ $errors->has('price') ? 'is-invalid' : '' }}" placeholder="Masukkan Harga Paket Destinasi" type="number" name="price"
                                :value="old('price')" required />
                            <x-jet-input-error for="price"></x-jet-input-error>
                        </div>



                        <div class="text-center">
                            <x-jet-button>
                                {{ __('Simpan') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-main-container>

</x-base-layout2>
