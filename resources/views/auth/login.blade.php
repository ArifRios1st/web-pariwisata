<x-guest-layout>
    <div class="container-fluid bg-registration" style="height: 100vh;">
        <div class="container py-5">
            <div class="row align-items-center my-5">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="text-white"><span class="text-primary">Login Sekarang!</span></h1>
                    </div>
                    <p class="text-white">Nikmati liburan ke Pulau Rupat bersama kami !</p>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Login Sekarang</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <x-jet-validation-errors class="mb-3 rounded-0" />

                            @if (session('status'))
                                <div class="alert alert-success mb-3 rounded-0" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <x-jet-label value="{{ __('fields.user.email') }}" />

                                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                        name="email" :value="old('email')" required />
                                    <x-jet-input-error for="email"></x-jet-input-error>
                                </div>

                                <div class="form-group">
                                    <x-jet-label value="{{ __('fields.user.password') }}" />

                                    <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        type="password" name="password" required autocomplete="current-password" />
                                    <x-jet-input-error for="password"></x-jet-input-error>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <x-jet-checkbox id="remember_me" name="remember" />
                                        <label class="custom-control-label" for="remember_me">
                                            {{ __('fields.rememberme') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-0">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <a class="text-muted me-3" href="{{ route('register') }}">
                                            {{ __('fields.register') }}
                                        </a>
                                        @if (Route::has('password.request'))
                                            <a class="text-muted me-3" href="{{ route('password.request') }}">
                                                {{ __('fields.forget') }}
                                            </a>
                                        @endif


                                        <x-jet-button>
                                            {{ __('fields.login') }}
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
