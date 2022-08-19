<x-base-layout2>
    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>

    <x-main-container>
        <x-slot name="title">
            {{ __('Profil Saya') }}
        </x-slot>
        <x-slot name="titleInfo">
            {{ __("Profile") }}
        </x-slot>

        <div class="row justify-content-center">
            <div>
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')

                    <x-jet-section-border />
                @endif

                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    @livewire('profile.update-password-form')

                    <x-jet-section-border />
                @endif

                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    @livewire('profile.two-factor-authentication-form')

                    <x-jet-section-border />
                @endif

                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())

                    @livewire('profile.delete-user-form')
                @endif
            </div>
        </div>
    </x-main-container>

</x-base-layout2>
