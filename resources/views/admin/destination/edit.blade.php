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

<x-base-layout>
    <x-slot name="header">
        {{ __('Edit') }}
    </x-slot>
    <x-slot name="headerInfo">
        {{ __('Edit Destinasi') }}
    </x-slot>

    <div class="col-lg-8">
        <div class="contact-form bg-white" style="padding: 30px;">
            <x-jet-validation-errors class="mb-3 rounded-0" />
            <x-action-message />
            <form method="POST" action="{{ route('admin.destination.update', $destination->slug) }}" enctype="multipart/form-data"
                novalidate="novalidate">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <x-jet-label value="{{ __('Nama Destinasi') }}" />

                    <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                        :value="old('name', $destination->name)" required />
                    <x-jet-input-error for="name"></x-jet-input-error>
                </div>
                <div class="form-group">
                    <textarea id="ckeditor" name="description" class="form-control mt-3" required
                        placeholder="{{ __('Deskripsi Destinasi') }}">{{ old('description', $destination->description) }}</textarea>
                    <x-jet-input-error for="description"></x-jet-input-error>
                </div>

                <div class="justify-content-center">
                    <img id="preview-image" src="{{ $destination->photo_url }}" class="mx-auto" style="width: 300px">
                </div>

                <div class="form-group">
                    <x-jet-label value="{{ __('Foto Destinasi') }}" />

                    <input id="photo" class="{{ $errors->has('photo') ? 'is-invalid' : '' }} form-control"
                        type="file" name="photo" />
                    <x-jet-input-error for="photo"></x-jet-input-error>
                </div>


                <div class="text-center">
                    <x-jet-button>
                        {{ __('Simpan') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
    </div>


</x-base-layout>
