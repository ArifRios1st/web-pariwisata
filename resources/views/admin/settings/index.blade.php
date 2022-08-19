<x-base-layout2>
    <x-slot name="header">
        {{ __('Pengaturan') }}
    </x-slot>

    <x-main-container>
        <x-slot name="title">
            {{ __("Pengaturan Website") }}
        </x-slot>
        <x-slot name="titleInfo">
            {{ __("Pengaturan") }}
        </x-slot>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form bg-white" style="padding: 30px;">
                    <x-jet-validation-errors class="mb-3 rounded-0" />
                    <x-action-message />
                    <form method="POST" action="{{ route('admin.settings.update') }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <x-jet-label value="{{ __('Nama Website') }}" />

                            <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                                :value="old('name', config('settings.name'))" required />
                            <x-jet-input-error for="name"></x-jet-input-error>
                        </div>

                        <div class="form-group">
                            <x-jet-label value="{{ __('Email Website') }}" />

                            <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                                :value="old('email', config('settings.email'))" required />
                            <x-jet-input-error for="email"></x-jet-input-error>
                        </div>

                        <div class="form-group">
                            <x-jet-label value="{{ __('No Hp Website') }}" />

                            <x-jet-input class="{{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone"
                                :value="old('phone', config('settings.phone'))" required />
                            <x-jet-input-error for="phone"></x-jet-input-error>
                        </div>

                        <div class="form-group">
                            <x-jet-label value="{{ __('Alamat Website') }}" />

                            <x-jet-input class="{{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address"
                                :value="old('address', config('settings.address'))" required />
                            <x-jet-input-error for="address"></x-jet-input-error>
                        </div>


                        <div class="form-group">
                            <x-jet-label value="{{ __('Facebook URL') }}" />

                            <x-jet-input class="{{ $errors->has('fb_link') ? 'is-invalid' : '' }}" type="text" name="fb_link"
                                :value="old('fb_link', config('settings.fb_link'))" required />
                            <x-jet-input-error for="fb_link"></x-jet-input-error>
                        </div>

                        <div class="form-group">
                            <x-jet-label value="{{ __('Instagram URL') }}" />

                            <x-jet-input class="{{ $errors->has('ig_link') ? 'is-invalid' : '' }}" type="text" name="ig_link"
                                :value="old('ig_link', config('settings.ig_link'))" required />
                            <x-jet-input-error for="ig_link"></x-jet-input-error>
                        </div>

                        <div class="form-group">
                            <x-jet-label value="{{ __('Twitter URL') }}" />

                            <x-jet-input class="{{ $errors->has('tw_link') ? 'is-invalid' : '' }}" type="text" name="tw_link"
                                :value="old('tw_link', config('settings.tw_link'))" required />
                            <x-jet-input-error for="tw_link"></x-jet-input-error>
                        </div>

                        <div class="form-group">
                            <x-jet-label value="{{ __('Youtube URL') }}" />

                            <x-jet-input class="{{ $errors->has('yt_link') ? 'is-invalid' : '' }}" type="text" name="yt_link"
                                :value="old('yt_link', config('settings.yt_link'))" required />
                            <x-jet-input-error for="yt_link"></x-jet-input-error>
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
