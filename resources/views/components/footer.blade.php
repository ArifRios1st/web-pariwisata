<div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
    <div class="row pt-5">
        <div class="col-lg-4 col-md-4 mb-5">
            <a href="" class="navbar-brand">
                <h1 class="text-primary"><span class="text-white">{{ config('settings.name', 'Laravel') }}</span>
                </h1>
            </a>
            <p>Selamat Datang di Wisata Rupat Utara Kami Menawarkan Paket Destinasi Wisata Liburan ke Pulau Rupat Utara
                Yang Indah dan Mempesona</p>
            <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
            <div class="d-flex justify-content-start">
                <a class="btn btn-outline-primary btn-square mr-2" href="{{ config('settings.tw_link') }}">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="btn btn-outline-primary btn-square mr-2" href="{{ config('settings.fb_link') }}">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-outline-primary btn-square mr-2" href="{{ config('settings.ig_link') }}">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="btn btn-outline-primary btn-square" href="{{ config('settings.yt_link') }}">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 mb-5">
            <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Layanan Kami</h5>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white-50 mb-2" href="#">
                    <i class="fa fa-angle-right mr-2"></i>
                    Tentang Kami
                </a>
                <a class="text-white-50 mb-2" href="{{ route('destination.index') }}">
                    <i class="fa fa-angle-right mr-2"></i>
                    Destinasi Wisata
                </a>
                <a class="text-white-50 mb-2" href="{{ route('packet.index') }}">
                    <i class="fa fa-angle-right mr-2"></i>
                    Paket Wisata
                </a>
                <a class="text-white-50" href="{{ route('register') }}">
                    <i class="fa fa-angle-right mr-2"></i>
                    Registrasi
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 mb-5">
            <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Kontak Kami</h5>
            <p><i class="fa fa-map-marker-alt mr-2"></i>{{ config('settings.address') }}</p>
            <p><i class="fa fa-phone-alt mr-2"></i>{{ config('settings.phone') }}</p>
            <p><i class="fa fa-envelope mr-2"></i>{{ config('settings.email') }}</p>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
    style="border-color: rgba(256, 256, 256, .1) !important;">
    <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white-50">Copyright &copy; <a
                    href="{{ config('app.url') }}">{{ config('settings.name') }}</a>. All Rights Reserved.</a>
            </p>
        </div>
    </div>
</div>
