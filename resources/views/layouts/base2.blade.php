<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="{{ config('app.name', 'Laravel') }}" name="keywords">
    <meta content="{{ config('app.name', 'Laravel') }}" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @stack('styles')

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('lib/easing/easing.min.js') }}" defer></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}" defer></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}" defer></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}" defer></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}" defer></script>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Contact Javascript File -->
    <script src="{{ asset('mail/jqBootstrapValidation.min.js') }}" defer></script>
    <script src="{{ asset('mail/contact.js') }}" defer></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}" defer></script>

</head>

<body>
    <div class="wrapper">

        <!-- Topbar Start -->
        <x-topbar />
        <!-- Topbar End -->

        <!-- Navbar Start -->
        @livewire('navigation-menus')
        <!-- Navbar End -->
        @if (request()->routeIs('home'))
        <!-- Carousel Start -->
        <x-carousel>
            <x-carousel.item src="img/carousel-1.jpg" alt="Image" :active="true">
                <x-carousel.item.title>Liburan dan Wisata</x-carousel.item.title>
                <x-carousel.item.caption>Mari Liburan ke Pulau Rupat Utara</x-carousel.item.caption>
                <x-carousel.item.button href="{{ route('packet.index') }}">Pesan Sekarang</x-carousel.item.button>
            </x-carousel.item>
            <x-carousel.item src="img/carousel-2.jpg" alt="Image">
                <x-carousel.item.title>Liburan dan Wisata</x-carousel.item.title>
                <x-carousel.item.caption>Mari Liburan ke Pulau Rupat Utara</x-carousel.item.caption>
                <x-carousel.item.button href="{{ route('packet.index') }}">Pesan Sekarang</x-carousel.item.button>
            </x-carousel.item>
        </x-carousel>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-6" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="img/about.jpg"
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-5 pb-lg-5">
                        <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Tentang Kami</h6>
                            <h1 class="mb-3">Kami menawarkan paket liburan ke Pulau Rupat Utara</h1>
                            <p>Banyak sekali tempat wisata di Pulau rupat yang kami tawarkan untuk kalian Liburan
                            </p>
                            <div class="row mb-4">
                                <div class="col-6">
                                    <img class="img-fluid" src="{{ App\Models\Destination::inRandomOrder()->limit(1)->first()->photo_url }}" alt="" style="max-height: 206px; width: 450px">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid" src="{{ App\Models\Destination::inRandomOrder()->limit(1)->first()->photo_url }}" alt="" style="max-height: 206px; width: 450px">
                                </div>
                            </div>
                            <a href="{{ route('packet.index') }}" class="btn btn-primary mt-1">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Feature Start -->
        <div class="container-fluid pb-5">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="d-flex mb-4 mb-lg-0">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                                style="height: 100px; width: 100px;">
                                <i class="fa fa-2x fa-money-check-alt text-white"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class="">Harga Bersahabat</h5>
                                <p class="m-0">Kami menawarkan Paket Liburan dengan harga yang bersahabat</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex mb-4 mb-lg-0">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                                style="height: 100px; width: 100px;">
                                <i class="fa fa-2x fa-award text-white"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class="">Layanan Terbaik</h5>
                                <p class="m-0">Kami memberikan layanan dengan sepenuh hati</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex mb-4 mb-lg-0">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3"
                                style="height: 100px; width: 100px;">
                                <i class="fa fa-2x fa-globe text-white"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <h5 class="">Beragam Tempat</h5>
                                <p class="m-0">Ada banyak tempat wisata yang kami tawarkan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->

        <!-- Destination Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5 pb-3">
                <div class="text-center mb-3 pb-3">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destinasi Wisata</h6>
                    <h1>Destinasi Terbaik</h1>
                </div>
                <div class="row">
                    @forelse (\App\Models\Destination::inRandomOrder()->limit(6)->get() as $destination)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="destination-item position-relative overflow-hidden mb-2">
                                <img class="img-fluid" src="{{ $destination->photo_url }}" alt="{{ $destination->slug }}" style="max-height: 206px; width: 450px">
                                <a class="destination-overlay text-center text-white text-decoration-none" href="{{ route('destination.show',$destination->slug) }}">
                                    <h5 class="text-white">{{ $destination->name }}</h5>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="text-center mb-3 pb-3 mx-auto">
                            <h3>Destinasi Belum Tersedia</h3>
                        </div>
                    @endforelse
                    </div>
                </div>
            </div>
        </div>
        <!-- Destination Start -->

        <!-- Packages Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5 pb-3">
                <div class="text-center mb-3 pb-3">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Paket Liburan</h6>
                    <h1>Paket Wisata Terbaik</h1>
                </div>
                <div class="row">
                    @forelse (\App\Models\Packet::inRandomOrder()->limit(6)->get() as $packet)
                        <div class="col-lg-4 col-md-6 mb-4 d-flex align-self-stretch">
                            <div class="package-item bg-white mb-2 h-100">
                                <img class="img-fluid" src="{{ $packet->destination->photo_url }}"
                                    alt="{{ $packet->slug }}" style="max-height: 206px; width: 450px">
                                <div class="p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <a href="{{ route('destination.show', $packet->destination->slug) }}" class="m-0">
                                            <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                                            {{ $packet->destination->name }}
                                        </a>
                                        <small class="m-0">
                                            <i class="fa fa-calendar-alt text-primary mr-2"></i>
                                            {{ $packet->days }} Hari
                                        </small>
                                        <small class="m-0">
                                            <i class="fa fa-user text-primary mr-2"></i>
                                            {{ $packet->people }} Orang
                                        </small>
                                    </div>
                                    <a class="h5 text-decoration-none" href="{{ route('destination.show',$packet->destination->slug) }}">{{ $packet->name }}</a>
                                    <div class="border-top pt-4">
                                        <div class="d-flex justify-content-end">
                                            <h5 class="m-0">@currency($packet->price)</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center mb-3 pb-3 mx-auto">
                            <h3>Destinasi Belum Tersedia</h3>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
        <!-- Packages End -->

        @if (!Auth::check())
            <!-- Registration Start -->
            <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
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
                                            <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                type="text" name="name" :value="old('name')" required
                                                autocomplete="name" placeholder="{{ __('fields.user.name') }}" />
                                            <x-jet-input-error for="name"></x-jet-input-error>
                                        </div>
                                        <div class="form-group">
                                            <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                type="email" name="email" :value="old('email')" required
                                                autocomplete="email" placeholder="{{ __('fields.user.email') }}" />
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
                                            <x-jet-input class="form-control" type="password"
                                                name="password_confirmation" required autocomplete="new-password"
                                                placeholder="{{ __('fields.user.confirm_password') }}" />
                                        </div>
                                        <div>
                                            <button class="btn btn-primary btn-block py-3"
                                                type="submit">{{ __('fields.button.register') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Registration End -->
        @endif
        @else
        <x-breadcrumb>
            <x-slot name="header">
                {{ $header }}
            </x-slot>
            {{ Breadcrumbs::render() }}
        </x-breadcrumb>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section>
                {{ $slot }}
            </section>
        </div>
        @endif
        <!-- /.content -->


    </div>
    <!-- /.content-wrapper -->


    <!-- Footer Start -->
    <x-footer />
    <!-- Footer End -->

    @stack('modals')
    @livewireScripts
    @stack('scripts')
</body>

</html>
