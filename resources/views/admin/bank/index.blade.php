<x-base-layout2>
    <x-slot name="header">
        {{ __('Rekening Bank') }}
    </x-slot>

    <x-main-container>
        <x-slot name="title">
            {{ __("Manajemen Rekening Bank") }}
        </x-slot>
        <x-slot name="titleInfo">
            {{ __("Rekening Bank") }}
        </x-slot>

        <div class="row justify-content-center">
            <div class="table-responsive">
                <x-action-message />
                <div class="mb-2">
                    <a href="{{ route('admin.bank.create') }}" class="btn btn-dark btn-sm">Tambah Rekening</a>
                </div>
                <table id="bank" class="table table-bordered datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto Bank</th>
                            <th>Nama Bank</th>
                            <th>Nama Pemilik Rekening</th>
                            <th>No Rekening</th>
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
