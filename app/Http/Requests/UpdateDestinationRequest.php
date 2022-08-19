<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateDestinationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /**
         * By default it returns false, change it to
         * something like this if u are checking authentication
         */
        return Auth::check(); // <------------------

        /**
         * You could also use something more granular, like
         * a policy rule or an admin validation like this:
         * return auth()->user()->isAdmin();
         *
         * Or just return true if you handle the authorization
         * anywhere else:
         * return true;
         */
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'description' => 'required',
            'photo' => 'image|mimes:jpg,png,jpeg,gif,svg',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Nama Destinasi Diperlukan.',
            'name.max' => 'Nama Destinasi tidak boleh lebih dari 255 karakter.',
            'description.required' => 'Deskripsi Destinasi Diperlukan.',
            'photo.image' => 'Foto Destinasi harus berupa gambar.',
        ];
    }
}
