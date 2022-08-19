<x-base-layout>
    <x-slot name="header">
        {{ __('Profile') }}
    </x-slot>
    <x-slot name="headerInfo">
        {{ __('Profil Saya') }}
    </x-slot>

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
</x-base-layout>
