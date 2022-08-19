@props(['active' => false])

@php
    $classes = ($active ?? false)
                ? 'carousel-item active'
                : 'carousel-item';
@endphp

<div class="{{ $classes }}">
    <img {{ $attributes->merge(['class' => 'w-100']) }}>
    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
        <div class="p-3" style="max-width: 900px;">
            {{ $slot }}
        </div>
    </div>
</div>
