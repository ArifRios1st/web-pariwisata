<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="{{ route('home') }}" class="navbar-brand">
                <h1 class="m-0 text-primary">{{ config('app.name', 'Laravel') }}</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? "active" : "" }}">Home</a>
                    <a class="nav-item nav-link {{ request()->routeIs('destination.*') ? 'active' : '' }}" href="{{ route('destination.index') }}">
                        {{ __('Destinasi Wisata') }}
                    </a>
                    <a class="nav-item nav-link {{ request()->routeIs('packet.*') ? 'active' : '' }}" href="{{ route('packet.index') }}">
                        {{ __('Paket Wisata') }}
                    </a>
                    @auth
                        @if (Auth::user()->hasRole('Administrator'))
                            <x-jet-dropdown class="nav-item">
                                <x-slot name="trigger">
                                    <span class="d-none d-md-inline {{ request()->routeIs('admin.*') ? "text-primary" : "" }}">Admin Menu</span>

                                    <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </x-slot>
                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <h6 class="dropdown-header">
                                        {{ __('Admin Menu') }}
                                    </h6>

                                    <x-jet-dropdown-link href="{{ route('admin.destination.index') }}">
                                        {{ __('Kelola Destinasi') }}
                                    </x-jet-dropdown-link>

                                    <x-jet-dropdown-link href="{{ route('admin.order.index') }}">
                                        {{ __('Kelola Pesanan') }}
                                    </x-jet-dropdown-link>

                                </x-slot>
                            </x-jet-dropdown>
                        @endif
                        <x-jet-dropdown id="navbarDropdown" class="nav-item">
                            <x-slot name="trigger">
                                <span class="d-none d-md-inline"><i class="fas fa-user"></i></span>

                                <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <h6 class="dropdown-header">
                                    {{ __('menus.manage_profile') }}
                                </h6>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                @endif

                                <hr class="dropdown-divider">

                                {{-- Psananmu --}}
                                <x-jet-dropdown-link href="{{ route('user.order.index') }}">
                                    {{ __('Pesananmu') }}
                                </x-jet-dropdown-link>

                                <hr class="dropdown-divider">

                                <!-- Authentication -->
                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();">
                                    {{ __('menus.logout') }}
                                </x-jet-dropdown-link>


                                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    @else
                    <x-jet-dropdown id="navbarDropdown" class="nav-item">
                        <x-slot name="trigger">
                            <span class="d-none d-md-inline"><i class="fas fa-user"></i></span>

                            <svg class="ms-2" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </x-slot>

                        <x-slot name="content">

                            <x-jet-dropdown-link href="{{ route('login') }}">
                                {{ __('Login') }}
                            </x-jet-dropdown-link>

                            <hr class="dropdown-divider">

                            <x-jet-dropdown-link href="{{ route('register') }}">
                                {{ __('Register') }}
                            </x-jet-dropdown-link>

                        </x-slot>
                    </x-jet-dropdown>
                    @endauth
                </div>
            </div>
        </nav>
    </div>
</div>

