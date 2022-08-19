<x-base-layout2>
    <x-slot name="header">
        {{ __('Destinasi') }}
    </x-slot>

    <x-main-container>
        <x-slot name="title">
            {{ __("Manajemen Destinasi") }}
        </x-slot>
        <x-slot name="titleInfo">
            {{ __("Destinasi") }}
        </x-slot>

        <div class="row justify-content-center">
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
        </div>
    </x-main-container>

</x-base-layout2>
