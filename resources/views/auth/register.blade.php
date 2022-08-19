<x-guest-layout>
    <div class="container-fluid bg-registration" style="height: 100vh;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="text-white"><span class="text-primary">Daftar Sekarang!</span></h1>
                    </div>
                    <p class="text-white">Nikmati liburan ke Pulau Rupat bersama kami !</p>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Daftar Sekarang</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text"
                                        name="name" :value="old('name')" required autocomplete="name"
                                        placeholder="{{ __('fields.user.name') }}" />
                                    <x-jet-input-error for="name"></x-jet-input-error>
                                </div>
                                <div class="form-group">
                                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                        name="email" :value="old('email')" required autocomplete="email"
                                        placeholder="{{ __('fields.user.email') }}" />
                                    <x-jet-input-error for="email"></x-jet-input-error>
                                </div>
                                <div class="form-group">
                                    <select id="gender" class="form-control" name="gender" required>
                                        <option value="m" {{ old('gender') == 'm' ? 'selected' : '' }}>
                                            {{ __('fields.user.genders.m') }}
                                        </option>
                                        <option value="f" {{ old('gender') == 'f' ? 'selected' : '' }}>
                                            {{ __('fields.user.genders.f') }}
                                        </option>

                                    </select>

                                    <x-jet-input-error for="gender"></x-jet-input-error>
                                </div>
                                <div class="input-group mb-2">

                                    <x-jet-input
                                        class="{{ $errors->has('birth_date') ? 'is-invalid' : '' }} datepicker ui-datepicker-calendar"
                                        type="text" name="birth_date" :value="old('birth_date')"
                                        placeholder="{{ __('fields.user.birth_date') }}" required />
                                    <x-jet-input-error for="birth_date"></x-jet-input-error>
                                </div>
                                <div class="form-group">
                                    <textarea name="address" class="form-control mt-3" required placeholder="{{ __('fields.user.address') }}">{{ old('address') }}</textarea>

                                    <x-jet-input-error for="address"></x-jet-input-error>
                                </div>
                                <div class="form-group">
                                    <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}"
                                        type="password" name="password" required autocomplete="new-password"
                                        placeholder="{{ __('fields.user.password') }}" />
                                    <x-jet-input-error for="password"></x-jet-input-error>
                                </div>

                                <div class="form-group">
                                    <x-jet-input class="form-control" type="password" name="password_confirmation"
                                        required autocomplete="new-password"
                                        placeholder="{{ __('fields.user.confirm_password') }}" />
                                </div>
                                <div class="mb-0">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <a class="text-muted me-3" href="{{ route('login') }}">
                                            {{ __('fields.button.login') }}
                                        </a>

                                        <x-jet-button>
                                            {{ __('fields.button.register') }}
                                        </x-jet-button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
