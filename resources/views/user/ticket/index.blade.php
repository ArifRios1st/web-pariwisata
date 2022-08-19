<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tiket Wisata</title>
    <link rel="stylesheet" href="{{ asset('css/ticket.css') }}">
    <style>
        .barcode-container{
            display: inline-block;
            margin-top: 90px;
            transform: rotate(270deg);
        }
    </style>
</head>

<body>
    <div class="ticket">
        <div class="ticket--start">
            <div class="barcode-container">
                <svg id="barcode"></svg>
            </div>
        </div>
        <div class="ticket--center">
            <div class="ticket--center--row">
                <div class="ticket--center--col">
                    <span>Tiket Pariwisata</span>
                    <strong>{{ $order->packet->name }}</strong>
                </div>
            </div>
            <div class="ticket--center--row">
                <div class="ticket--center--col">
                    <span class="ticket--info--title">Tanggal</span>
                    <span class="ticket--info--subtitle">{{ Carbon\Carbon::createFromFormat('Y-m-d', $order->start)->format('d-m-Y') }}</span>
                    <span class="ticket--info--subtitle">Sampai</span>
                    <span class="ticket--info--subtitle">{{ Carbon\Carbon::createFromFormat('Y-m-d', $order->start)->addDay($order->packet->days)->format('d-m-Y') }}</span>
                </div>
                <div class="ticket--center--col">
                    <span class="ticket--info--title">Lokasi</span>
                    <span class="ticket--info--subtitle">{{ $order->packet->destination->name }}</span>
                    <span class="ticket--info--content">Untuk {{ $order->packet->people }} Orang</span>
                </div>
            </div>
            <div class="ticket--center--row">
                <div class="ticket--center--col">
                    <span class="ticket--info--title">Tipe Tiket</span>
                    <span class="ticket--info--content">Pariwisata</span>
                </div>
                <div class="ticket--center--col">
                    <span class="ticket--info--title">Info Pesanan</span>
                    <span class="ticket--info--content">Order #{{ $order->created_at->format('ymd').$order->id.$order->user_id.$order->packet_id.$order->packet->destination_id }}. </span>
                    <span class="ticket--info--content">Dipesan oleh {{ $order->user->name }}</span>
                </div>
            </div>
        </div>
        <div class="ticket--end">
            <div><img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Qrcode_wikipedia_fr_v2clean.png"></div>
            <div></div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.qrcode.js') }}"></script>
    <script src="{{ asset('js/qrcode.js') }}"></script>
    <script src="{{ asset('js/barcode.js') }}"></script>
    <script>
        JsBarcode("#barcode", "{{ $order->created_at->format('ymd').$order->id.$order->user_id.$order->packet_id.$order->packet->destination_id }}");
        jQuery('#qrcode').qrcode({
            width: 64,
            height: 64,
            text	: "{{ $order->created_at->format('ymd').$order->id.$order->user_id.$order->packet_id.$order->packet->destination_id }}"
        });

    </script>
</body>

</html>

