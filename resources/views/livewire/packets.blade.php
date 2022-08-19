<x-main-container>
    <x-slot name="title">
        {{ __("Paket Destinasi Terbaik") }}
    </x-slot>
    <x-slot name="titleInfo">
        {{ __("Semua Paket Destinasi") }}
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
        <div class="col-lg-2 col-md-12 mb-2">
            <div class="mb-3 mb-md-0 form-group">
                <x-jet-label value="Harga Minimal" />
                <input class="form-control mb-3" type="number" wire:model="minPrice" placeholder="Harga Minimal" aria-label="price" class="form-control">
            </div>

            <div class="mb-3 mb-md-0 form-group">
                <x-jet-label value="Harga Maksimal" />
                <input class="form-control mb-3" type="number" wire:model="maxPrice" placeholder="Harga Maksimal" aria-label="price" class="form-control">
            </div>

            <div class="mb-3 mb-md-0 form-group">
                <x-jet-label value="Jumlah Orang" />
                <input class="form-control mb-3" type="number" wire:model="person" placeholder="Jumlah Orang" aria-label="person" class="form-control">
            </div>
        </div>
        <div class="col-lg-10 col-md-12">
            <div class="row">
                @forelse ($packets as $packet)
                    <div class="col-lg-4 col-md-6 mb-1 p-1">
                        <div class="package-item bg-white mb-2">
                            <a href={{ route('destination.show', $packet->destination->slug) }} >
                                <img class="img-fluid w-100" src="{{ $packet->destination->photo_url }}" alt="" style="max-height: 206px; width: 450px">
                            </a>
                            <div class="p-3">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0">
                                        <a class="m-0 p-0" href={{ route('destination.show', $packet->destination->slug) }} >
                                            <i class="fa fa-map-marker-alt text-primary mr-2"></i>{{ $packet->destination->name }}
                                        </a>
                                    </small>
                                    <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>{{ $packet->days }} hari</small>
                                    <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>{{ $packet->people }} Orang</small>
                                </div>
                                <a class="h5 text-decoration-none" href="{{ route('destination.show', $packet->destination->slug) }}">{{ $packet->name }}</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="m-0">@currency($packet->price)</h5>
                                        <a href={{ route('destination.show', $packet->destination->slug) }}
                                            class="btn btn-primary btn-sm">
                                            Pesan
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>

        </div>
    </div>

    <div class="d-flex justify-content-end">
        {{ $packets->onEachSide(0)->links() }}
    </div>


</x-main-container>
