<x-base-layout2>
    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function(event) {
                $('#packet').on('change', (e) => {
                    let price = $(this).find(':selected').data('price');
                    if(price){
                        $('#price_selected').text(price).removeClass('d-none')
                        $('#price').addClass('d-none')
                    }else{
                        $('#price_selected').addClass('d-none')
                        $('#price').removeClass('d-none')
                    }
                })
            });
        </script>
    @endpush

    <x-slot name="header">
        {{ __('Destinasi Detail') }}
    </x-slot>

    <x-main-container>
        <x-slot name="title">
            {{ __($destination->name) }}
        </x-slot>
        <x-slot name="titleInfo">
            {{ __("Destinasi Detail") }}
        </x-slot>

        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    <x-action-message />
                    <!--Main layout-->
                    <div class="row wow fadeIn py-5">
                        <!--Grid column-->
                        <div class="col-md-6 mb-4">
                            <img src="{{ $destination->photo_url }}" class="img-fluid w-100" alt="{{ $destination->slug }}">
                        </div>
                        <!--Grid column-->
                        <!--Grid column-->
                        <div class="col-md-6 mb-4">

                            <!--Content-->
                            <div class="p-4">

                                <h2 class="font-weight-bold">{{ __($destination->name) }}</h2>

                                <p class="lead">
                                    <span id="price" class="text-green">@currency($destination->packets()->min('price')) - @currency($destination->packets()->max('price'))</span>
                                    <span id="price_selected" class="text-green d-none"></span>
                                </p>
                                <hr>
                                <p class="lead font-weight-bold">Deskripsi</p>

                                <p>{!! $destination->description !!}</p>
                                <hr>
                                <form action="{{ route('user.order.create') }}" method="get">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <x-jet-label value="{{ __('Paket Destinasi') }}" />
                                                <select id="packet" name="packet" class="form-control" required>
                                                    <option>-- Pilih Paket --</option>
                                                    @foreach ($destination->packets->sortBy('packets.price') as $packet )
                                                        <option value="{{ $packet->slug }}" data-price="@currency($packet->price)">{{ $packet->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Tanggal Mulai</label>
                                                <input type="date" class="form-control" name="start" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row px-3">
                                        <div class="col-xs-6">
                                            <button type="submit" class="btn btn-success">Pesan Sekarang</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--Content-->
                        </div>
                        <!--Grid column-->
                        <div class="col-12">
                            <ul class="nav nav-tabs" id="packets" role="tablist">
                              <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="descPackets-tab" data-bs-toggle="tab" data-bs-target="#descPackets" type="button" role="tab" aria-controls="descPackets" aria-selected="true">Deskripsi Paket</button>
                              </li>
                            </ul>

                            <div class="tab-content" id="packetsContent">
                              <div class="tab-pane fade show active pt-2" id="descPackets" role="tabpanel" aria-labelledby="descPackets-tab">
                                  @foreach($destination->packets as $packet)
                                      <span>{{ $packet->name }}</span>
                                      <div class="mb-2">
                                          <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>{{ $packet->days}} hari</small>
                                          <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>{{ $packet->people}} Orang</small>
                                        </div>
                                  @endforeach
                              </div>
                        </div>
                    </div>
                    <!--Main layout-->
                </div>
            </div>
        </div>
    </x-main-container>

</x-base-layout>

