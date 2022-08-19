<x-main-container>
    <x-slot name="title">
        {{ __("Cari Destinasi Liburanmu") }}
    </x-slot>
    <x-slot name="titleInfo">
        {{ __("Semua Destinasi") }}
    </x-slot>

    <div class="d-flex justify-content-between mb-3">
        <div class="d-flex">
            <div class="mb-3 mb-md-0 input-group">
                <input class="form-control mb-3" type="text" wire:model="search" placeholder="Cari" aria-label="cari" class="form-control">
            </div>
        </div>

        <div class="d-flex">
            <div class="ml-0 ml-md-2">
                <select wire:model="perPage" id="perPage" class="form-control">
                    <option value="9" wire:key="per-page-9-table">9</option>
                    <option value="24" wire:key="per-page-24-table">24</option>
                    <option value="48" wire:key="per-page-48-table">48</option>
                    <option value="100" wire:key="per-page-100-table">100</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        @forelse ($destinations as $destination)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="{{ $destination->photo_url }}" alt="" style="max-height: 206px; width: 450px">
                    <a class="destination-overlay text-white text-decoration-none" href="{{ route('destination.show', $destination->slug) }}">
                        <h5 class="text-white">{{ $destination->name }}</h5>
                        <span>Ada {{ $destination->packets->count() }} Paket</span>
                    </a>
                </div>
            </div>
        @empty

        @endforelse
    </div>

    <div class="d-flex justify-content-end">
        {{ $destinations->onEachSide(0)->links() }}
    </div>
</x-main-container>
