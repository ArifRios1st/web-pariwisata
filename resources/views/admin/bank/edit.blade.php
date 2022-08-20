@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
        $('#photo').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview-image').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
    </script>
@endpush

<x-base-layout2>
    <x-slot name="header">
        {{ __('Edit') }}
    </x-slot>

    <x-main-container>
        <x-slot name="title">
            {{ __("Edit Bank") }}
        </x-slot>
        <x-slot name="titleInfo">
            {{ __("Edit") }}
        </x-slot>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form bg-white" style="padding: 30px;">
                    <x-jet-validation-errors class="mb-3 rounded-0" />
                    <x-action-message />
                    <form method="POST" action="{{ route('admin.bank.update', $bankAccount->id) }}" enctype="multipart/form-data"
                        novalidate="novalidate">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <x-jet-label value="{{ __('Nama Bank') }}" />

                            <x-jet-input class="{{ $errors->has('bank_name') ? 'is-invalid' : '' }}" type="text" name="bank_name"
                                :value="old('bank_name',$bankAccount->bank_name)" required />
                            <x-jet-input-error for="bank_name"></x-jet-input-error>
                        </div>

                        <div class="justify-content-center">
                            <img id="preview-image" src="" class="mx-auto" style="width: 300px">
                        </div>

                        <div class="form-group">
                            <x-jet-label value="{{ __('Foto Icon Bank') }}" />

                            <input id="photo" class="{{ $errors->has('photo') ? 'is-invalid' : '' }} form-control"
                                type="file" name="photo" />
                            <x-jet-input-error for="photo"></x-jet-input-error>
                        </div>

                        <div class="form-group">
                            <x-jet-label value="{{ __('Nama Pemilik Rekening') }}" />

                            <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                                :value="old('name',$bankAccount->name)" required />
                            <x-jet-input-error for="name"></x-jet-input-error>
                        </div>

                        <div class="form-group">
                            <x-jet-label value="{{ __('No Rekening') }}" />

                            <x-jet-input class="{{ $errors->has('account_number') ? 'is-invalid' : '' }}" type="text" name="account_number"
                                :value="old('account_number',$bankAccount->account_number)" required />
                            <x-jet-input-error for="account_number"></x-jet-input-error>
                        </div>


                        <div class="text-center">
                            <x-jet-button>
                                {{ __('Simpan') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-main-container>
</x-base-layout2>
