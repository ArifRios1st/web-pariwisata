<x-base-layout2>
    <x-slot name="header">
        {{ __('Semua Pesananmu') }}
    </x-slot>
    <x-slot name="headerInfo">
        {{ __('Selesaikan Pesananmu') }}
    </x-slot>

    <div class="container mt-5 px-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>Detail Paket</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse (Auth::user()->orders as $order)
                    <tr>
                        <td>
                            <a href="{{ route('destination.show',$order->packet->destination->slug) }}">
                                <img class="img-fluid" src="{{ $order->packet->destination->photo_url }}" style="height: 150px">
                            </a>
                        </td>
                        <td class="align-middle">
                            <a href="{{ route('destination.show',$order->packet->destination->slug) }}">
                                <h4>{{ $order->packet->name }}</h5>
                            </a>
                            <a href="{{ route('destination.show',$order->packet->destination->slug) }}">
                                <h6><i class="fa fa-map-marker-alt text-primary mr-2"></i> {{ $order->packet->destination->name }}</h6>
                            </a>
                                <h6><i class="fa fa-user text-primary mr-2"></i> {{ $order->packet->people }} Orang</h6>
                                <h6><i class="fa fa-calendar-alt text-primary mr-2"></i> {{ $order->packet->days }} Hari</h6>
                                <h6><i class="fa fa-calendar-alt text-primary mr-2"></i>Tanggal Mulai {{ $order->start }}</h6>
                        </td>
                        <td class="text-center align-middle">
                            <span class="text-primary">@currency($order->packet->price)</span>
                        </td>
                        <td class="text-center align-middle">
                            {!! $order->status == 0 ? '<span class="badge badge-danger">Belum Dibayar</span>' : ($order->status == 1 ? '<span class="badge badge-warning">Menunggu Konfirmasi</span>' : ($order->status == 2 ? '<span class="badge badge-danger">Pembayaran Ditolak</span>' : ($order->status == 3 ? '<span class="badge badge-success">Sudah Dibayar</span>' : '<span class="badge badge-danger">Pesanan Dibatalkan</span>'))) !!}
                        </td>
                        <td class="text-center align-middle">
                            @if ($order->status == 0 | $order->status == 2 )
                                <form action="{{ route('user.order.cancel', $order->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <a href="{{ route('user.order.edit', $order->id) }}" class="btn btn-primary">Bayar</a>
                                    <button type="submit" class="btn btn-danger">Batalkan</button>
                                </form>
                            @elseif ($order->status == 1)
                                <form action="{{ route('user.order.cancel', $order->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <a href="{{ $order->photo_url }}" class="btn btn-primary">Bukti</a>
                                    <button type="submit" class="btn btn-danger">Batalkan</button>
                                </form>
                            @elseif ($order->status == 3)
                                <a href="{{ $order->photo_url }}" class="btn btn-primary">Bukti</a>
                                <a href="{{ route('user.ticket.index',$order->id) }}" class="btn btn-dark">Print Tiket</a>
                            @else

                                <button class="btn btn-danger" disabled="disabled">Dibatalkan</button>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="text center align-middle">Belum Ada Pesanan Yang DIbuat</td>
                        <td></td>
                        <td></td>
                    </tr>

                @endforelse
            </tbody>
        </table>
    </div>

</x-base-layout2>

