<x-base-layout>
    <x-slot name="header">
        {{ __($destination->name) }}
    </x-slot>
    <x-slot name="headerInfo">
        {{ __('Destinasi Paket') }}
    </x-slot>

    <div class="table-responsive">
        <x-action-message />
        <div class="mb-2">
            <a href="{{ route('admin.destination.packet.create',$destination->slug) }}" class="btn btn-dark btn-sm">Tambah Paket Destinasi</a>
        </div>
        <table id="destinationPacket" class="table table-bordered datatable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Hari</th>
                    <th>Orang</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>


</x-base-layout>


