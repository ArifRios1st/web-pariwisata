<x-base-layout>
    <x-slot name="header">
        {{ __('Destinasi') }}
    </x-slot>
    <x-slot name="headerInfo">
        {{ __('Manajemen Destinasi') }}
    </x-slot>

    <div class="table-responsive">

        <x-action-message />

        <div class="mb-2">
            <a href="{{ route('admin.destination.create') }}" class="btn btn-dark btn-sm">Tambah Destinasi</a>
        </div>
        <table id="destination" class="table table-bordered datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

</x-base-layout>
