@if (session()->has('action-message'))
    <div class="alert alert-success" id="action-message" role="alert" {{ $attributes->merge(['class' => 'small']) }}>
        <div class="alert-body">
            {{ $slot->isEmpty() ? __('fields.saved') : $slot }}
        </div>
    </div>
@endif

