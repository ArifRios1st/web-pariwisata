<x-base-layout2>
    <x-slot name="header">
        {{ __('Kelola Pesanan') }}
    </x-slot>
    <x-slot name="headerInfo">
        {{ __('Kelola Pesanan') }}
    </x-slot>

    <div class="container mt-5 px-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Pemesan</th>
                    <th>Detail Paket</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                    <tr>
                        <td class="text-center align-middle">
                            {{ $order->user->name }}
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
                            @if ($order->status == 2 )

                            @elseif ($order->status == 1)
                            <a href="{{ $order->photo_url }}" class="btn btn-primary">Bukti</a>
                            <form action="{{ route('admin.order.reject',$order->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-danger">Tolak</button>
                            </form>
                            <form action="{{ route('admin.order.accept',$order->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-primary">Terima</button>
                            </form>
                            @elseif ($order->status == 3)
                                <a href="{{ $order->photo_url }}" class="btn btn-primary">Bukti</a>
                            @elseif ($order->status == 4)
                                <button class="btn btn-danger" disabled="disabled">Dibatalkan</button>
                            @else

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
