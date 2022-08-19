<x-guest-layout>
    <div class="container-fluid bg-registration" style="height: 100vh;">
        <div class="container py-5">
            <div class="row align-items-center my-5">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="text-white"><span class="text-primary">Reset Password</span></h1>
                    </div>
                    <p class="text-white">{{ __('fields.forgot_message') }}</p>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Reset Password</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <x-jet-validation-errors class="mb-3" />

                            <form method="POST" action="/forgot-password">
                                @csrf

                                <div class="form-group">
                                    <x-jet-label value="{{ __('fields.user.email') }}" />
                                    <x-jet-input type="email" name="email" :value="old('email')" placeholder="{{ __('fields.user.email') }}" required autofocus />
                                </div>

                                <div class="d-flex justify-content-between mt-4">
                                    <a class="text-muted me-3" href="{{ route('login') }}">
                                        {{ __('fields.login') }}
                                    </a>
                                    <x-jet-button>
                                        {{ __('fields.submit') }}
                                    </x-jet-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
