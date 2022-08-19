<div class="container-fluid pt-5">
    <div class="container pt-5">
        <div class="text-center mb-3 pb-3">
            <h1>{{ $title }}</h1>
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">
                {{ $titleInfo }}
            </h6>
        </div>
        {{ $slot }}

        @if (isset($aside))
            <div class="col-lg-3">
                {{ $aside }}
            </div>
        @endif
    </div>
</div>
