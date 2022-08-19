<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('fields.profile.info.title') }}
    </x-slot>

    <x-slot name="description">
        {{ __('fields.profile.info.desc') }}
    </x-slot>

    <x-slot name="form">
        <x-jet-action-message on="saved">
            {{ __('fields.saved') }}
        </x-jet-action-message>

        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div class="form-group" x-data="{ photoName: null, photoPreview: null }">
                <!-- Profile Photo File Input -->
                <input type="file" hidden wire:model="photo" x-ref="photo"
                    x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo Profil') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" class="rounded-circle" height="80px"
                        width="80px">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <img x-bind:src="photoPreview" class="rounded-circle" width="80px" height="80px">
                </div>

                <x-jet-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('fields.profile.info.buttonselect') }}
                </x-jet-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('fields.profile.info.buttonremove') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <div class="w-md-75">
            <!-- Name -->
            <div class="form-group">
                <x-jet-label for="name" value="{{ __('fields.name') }}" />
                <x-jet-input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                    wire:model.defer="state.name" autocomplete="name" />
                <x-jet-input-error for="name" />
            </div>

            <!-- Email -->
            <div class="form-group">
                <x-jet-label for="email" value="{{ __('fields.email') }}" />
                <x-jet-input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                    wire:model.defer="state.email" />
                <x-jet-input-error for="email" />
            </div>


            <!-- Gender -->
            <div class="form-group">
                <x-jet-label for="gender" value="{{ __('fields.gender') }}" />
                <select id="gender" class="form-control" name="gender" required
                    wire:model.defer="state.gender" >
                    <option value="m" {{ $this->user->gender == 'm' ? 'selected' : '' }}>
                        {{ __('fields.genders.m') }}
                    </option>
                    <option value="f" {{ $this->user->gender == 'f' ? 'selected' : '' }}>
                        {{ __('fields.genders.f') }}
                    </option>
                </select>
                <x-jet-input-error for="gender" />
            </div>

            <!-- Address -->
            <div class="form-group">
                <x-jet-label value="{{ __('fields.address') }}" />
                <textarea name="address" class="form-control" required
                    wire:model.defer="state.address" >
                    {{ $this->user->address }}
                </textarea>
                <x-jet-input-error for="address"></x-jet-input-error>
            </div>

            <!-- Date of Birth -->
            <div class="form-group">
                <x-jet-label value="{{ __('fields.birth_date') }}" />
                <x-jet-input type="date" class="{{ $errors->has('birth_date') ? 'is-invalid' : '' }}"
                    wire:model.defer="state.birth_date" />
                <x-jet-input-error for="birth_date"></x-jet-input-error>
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
        <div class="d-flex align-items-baseline">
            <x-jet-button>
                {{ __('fields.save') }}
            </x-jet-button>
        </div>
    </x-slot>
</x-jet-form-section>
