@unless($breadcrumbs->isEmpty())
    @foreach ($breadcrumbs as $breadcrumb)
        @if ($breadcrumb->url && !$loop->last)
            <p class="m-0 text-uppercase"><a class="text-white" href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></p>
            <i class="fa fa-angle-double-right pt-1 px-3"></i>
        @else
            <p class="m-0 text-uppercase">{{ $breadcrumb->title }}</p>
        @endif
    @endforeach
@endunless
