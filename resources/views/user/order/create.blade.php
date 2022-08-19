<x-base-layout2>
    <x-slot name="header">
        {{ __('Detail Pesanan') }}
    </x-slot>
    <x-slot name="headerInfo">
        {{ __('Selesakan Pesananmu') }}
    </x-slot>

    <div class="container mt-5 px-5">
        <div class="mb-4">
            <h2>Konfirmasi Pesananmu dan Bayar</h2>
            <span>Tolong lengkapi informasi pesananmu.</span>
        </div>
        <x-jet-validation-errors class="mb-3 rounded-0" />
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('user.order.store') }}" method="post">
                    @csrf
                    <div class="card p-3">
                        <h6 class="text-uppercase">Nama Pemesan</h6>
                        <div class="inputbox mt-3">
                            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" readonly required>
                            <span>(*)Pastikan nama sesuai dengan nama di bukti pembayaran. jika tidak, tinggalkan catatan</span>
                        </div>
                        <div class="mt-4 mb-4">
                            <h6 class="text-uppercase">Catatan Pesanan</h6>
                            <div class="inputbox">
                                <input type="hidden" name="start" value="{{ $order['start'] }}">
                                <input type="hidden" name="packet" value="{{ $order['packet']->slug }}">
                                <textarea name="message" cols="30" rows="10" class="form-control">

                                </textarea>
                                <x-jet-input-error for="description"></x-jet-input-error>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4 d-flex justify-content-between">
                        <span><a class="text-muted" href="{{ route('packet.index') }}">Pilih paket wisata lain</a></span>
                        <button type="submit" class="btn btn-success px-3">Pesan</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="card card-blue p-3 mb-3">
                <span>Kamu Harus membayar sebesar</span>
                    <div class="d-flex flex-row align-items-end mb-3">
                        <h2 class="mb-0 text-primary">@currency($order['packet']->price)</h2>
                    </div>

                    <span>Pesananmu</span>
                    <h4>{{ $order['packet']->name }}</h5>
                    <h6><i class="fa fa-map-marker-alt text-primary mr-2"></i> {{ $order['packet']->destination->name }}</h6>
                    <small><i class="fa fa-user text-primary mr-2"></i> {{ $order['packet']->people }} Orang</small>
                    <small><i class="fa fa-calendar-alt text-primary mr-2"></i> {{ $order['packet']->days }} Hari</small>
                    <small><i class="fa fa-calendar-alt text-primary mr-2"></i>Tanggal Mulai {{ $order['start'] }}</small>
                </div>
            </div>
        </div>
    </div>

</x-base-layout2>
