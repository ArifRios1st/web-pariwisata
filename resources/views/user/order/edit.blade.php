<x-base-layout2>
    <x-slot name="header">
        {{ __('Detail Pesanan') }}
    </x-slot>
    <x-slot name="headerInfo">
        {{ __('Selesakan Pesananmu') }}
    </x-slot>

    <div class="container mt-5 px-5">
        <div class="mb-4">
            <h2>Pembayaran</h2>
            <span>Tolong lengkapi informasi pesananmu.</span>
        </div>
        <x-jet-validation-errors class="mb-3 rounded-0" />
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('user.order.update', $order->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card p-3">
                        <span class="pb-5">Pembayaran ditransfer ke no rekening berikut :</span>
                        <div class="row justify-content-around">
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset('img/bank-bni.png') }}" alt="" style="height: 30px">
                                        <h6 class="mt-2">Nama</h6>
                                        <h6>xxx-xxx-xxx-xx</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ asset('img/BRI_2020.svg.png') }}" alt="" style="height: 30px">
                                        <h6 class="mt-2">Nama</h6>
                                        <h6>xxx-xxx-xxx-xx</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inputbox mt-3">
                            <input type="file" name="photo" class="form-control" accept="image/png, image/gif, image/jpeg" required>
                            <span>(*)Bukti Pembayaran</span>
                        </div>
                    </div>
                    <div class="mt-4 mb-4 d-flex justify-content-between">
                        <span><a class="text-muted" href="{{ route('user.order.index') }}">Kembali</a></span>
                        <button type="submit" class="btn btn-success px-3">Bayar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="card card-blue p-3 mb-3">
                <span>Kamu Harus membayar sebesar</span>
                    <div class="d-flex flex-row align-items-end mb-3">
                        <h2 class="mb-0 text-primary">@currency($order->packet->price)</h2>
                    </div>

                    <span>Pesananmu</span>
                    <h4>{{ $order['packet']->name }}</h5>
                    <h6><i class="fa fa-map-marker-alt text-primary mr-2"></i> {{ $order->packet->destination->name }}</h6>
                    <small><i class="fa fa-user text-primary mr-2"></i> {{ $order->packet->people }} Orang</small>
                    <small><i class="fa fa-calendar-alt text-primary mr-2"></i> {{ $order->packet->days }} Hari</small>
                    <small><i class="fa fa-calendar-alt text-primary mr-2"></i>Tanggal Mulai {{ $order->start }}</small>
                </div>
            </div>
        </div>
    </div>

</x-base-layout2>
