<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DestinationPacketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
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
            'days' => 'required|numeric',
            'people' => 'required|numeric',
            'price' => 'required|numeric',
            'destination_id' => 'required',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'Nama Paket Destinasi',
            'days' => 'Jumlah Hari',
            'people' => 'Jumlah Orang',
            'price' => 'Harga Paket',
            'destination_id' => 'Destinasi',
        ];
    }
}
