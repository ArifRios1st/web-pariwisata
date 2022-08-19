<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute hrus disetujui.',
    'accepted_if' => ':attribute harus disetujui ketika :other adalah :value.',
    'active_url' => ':attribute bukan URL yang valid.',
    'after' => ':attribute harus tanggal setelah :date.',
    'after_or_equal' => ':attribute harus tanggal setelah atau sama dengan :date.',
    'alpha' => ':attribute hanya dapat mengandung huruf.',
    'alpha_dash' => ':attribute hanya dapat mengandung huruf, angka, tanda hubung dan garis bawah.',
    'alpha_num' => ':attribute hanya dapat mengandung huruf dan angka.',
    'array' => ':attribute harus berupa array.',
    'before' => ':attribute harus tanggal sebelum :date.',
    'before_or_equal' => ':attribute harus tanggal sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => ':attribute harus diantara :min dan :max.',
        'file' => ':attribute harus diantara :min dan :max kilobyte.',
        'string' => ':attribute harus diantara :min dan :max karakter.',
        'array' => ':attribute harus diantara :min dan :max item.',
    ],
    'boolean' => ':attribute harus bernilai true atau false.',
    'confirmed' => ':attribute konfirmasi tidak cocok.',
    'current_password' => 'Kata sandi salah.',
    'date' => ':attribute bukan tanggal yang valid.',
    'date_equals' => ':attribute harus tanggal yang sama dengan :date.',
    'date_format' => ':attribute tidak sesuai format :format.',
    'declined' => ':attribute harus ditolak.',
    'declined_if' => ':attribute harus ditolak ketika :other adalah :value.',
    'different' => ':attribute dan :other harus berbeda.',
    'digits' => ':attribute harus :digits digit.',
    'digits_between' => ':attribute harus diantara :min dan :max digit.',
    'dimensions' => ':attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => ':attribute bidang memiliki nilai duplikat.',
    'email' => ':attribute harus sebuah email yang valid.',
    'ends_with' => ':attribute harus diakhiri dengan salah satu dari berikut ini: :values.',
    'enum' => ':attribute yang dipilih tidak valid.',
    'exists' => ':attribute yang dipilih tidak valid.',
    'file' => ':attribute harus berupa file.',
    'filled' => ':attribute harus diisi.',
    'gt' => [
        'numeric' => ':attribute harus lebih besar dari :value.',
        'file' => ':attribute harus lebih besar dari :value kilobyte.',
        'string' => ':attribute harus lebih besar dari :value karakter.',
        'array' => ':attribute harus lebih dari :value item.',
    ],
    'gte' => [
        'numeric' => ':attribute harus lebih besar dari atau sama dengan :value.',
        'file' => ':attribute harus lebih besar dari atau sama dengan :value kilobyte.',
        'string' => ':attribute harus lebih besar dari atau sama dengan :value karakter.',
        'array' => ':attribute harus memiliki :value item atau lebih.',
    ],
    'image' => ':attribute harus berupa gambar.',
    'in' => ':attribute yang dipilih tidak valid.',
    'in_array' => ':attribute bidang tidak ada di :other.',
    'integer' => ':attribute harus berupa bilangan bulat.',
    'ip' => ':attribute harus berupa alamat IP yang valid.',
    'ipv4' => ':attribute harus alamat IPv4 yang valid.',
    'ipv6' => ':attribute harus alamat IPv6 yang valid.',
    'json' => ':attribute harus berupa string JSON yang valid.',
    'lt' => [
        'numeric' => ':attribute harus kurang dari :value.',
        'file' => ':attribute harus kurang dari :value kilobyte.',
        'string' => ':attribute harus kurang dari :value karakter.',
        'array' => ':attribute harus lebih dari :value item.',
    ],
    'lte' => [
        'numeric' => ':attribute harus kurang dari atau sama dengan :value.',
        'file' => ':attribute harus kurang dari atau sama dengan :value kilobyte.',
        'string' => ':attribute harus kurang dari atau sama dengan :value karakter.',
        'array' => ':attribute tidak boleh lebih dari :value item.',
    ],
    'mac_address' => ':attribute harus berupa alamat MAC yang valid.',
    'max' => [
        'numeric' => ':attribute tidak boleh lebih besar dari :max.',
        'file' => ':attribute tidak boleh lebih besar dari :max kilobyte.',
        'string' => ':attribute tidak boleh lebih besar dari :max karakter.',
        'array' => ':attribute tidak boleh lebih dari :max item.',
    ],
    'mimes' => ':attribute harus berupa file bertipe: :values.',
    'mimetypes' => ':attribute harus berupa file bertipe: :values.',
    'min' => [
        'numeric' => ':attribute harus setidaknya :min.',
        'file' => ':attribute harus setidaknya :min kilobyte.',
        'string' => ':attribute harus setidaknya :min karakter.',
        'array' => ':attribute harus memiliki setidaknya :min items.',
    ],
    'multiple_of' => ':attribute harus kelipatan dari :value.',
    'not_in' => ':attribute tidak valid.',
    'not_regex' => 'Format :attribute tidak valid.',
    'numeric' => ':attribute harus berupa angka.',
    'password' => 'Password tidak valid.',
    'passwords' => [
        'max' => ':attribute tidak boleh lebih besar dari :length karakter',
        'min' => ':attribute harus setidaknya :length karakter',
        'upper' => ':attribute harus setidaknya :length karakter dan mengandung setidaknya satu huruf kapital.',
        'number' => ':attribute harus setidaknya :length karakter dan mengandung setidaknya satu angka.',
        'special' => ':attribute harus setidaknya :length karakter dan mengandung setidaknya satu simbol.',
        'uppernumber' => ':attribute harus setidaknya :length karakter dan mengandung setidaknya satu huruf kapital dan satu angka.',
        'upperspecial' => ':attribute harus setidaknya :length karakter dan mengandung setidaknya satu huruf kapital dan satu simbol.',
        'uppernumberspecial' => ':attribute harus setidaknya :length karakter dan mengandung setidaknya satu huruf kapital, satu angka, dan satu simbol.',
        'specialnumber' => ':attribute harus setidaknya :length karakter dan mengandung setidaknya satu simbol dan satu angka.',

    ],
    'present' => ':attribute bidang ini harus ada.',
    'prohibited' => ':attribute bidang ini dinonaktifkan.',
    'prohibited_if' => ':attribute bidang ini dinonaktifkan ketika :other adalah :value.',
    'prohibited_unless' => ':attribute bidang ini dinonaktifkan setidaknya :other adalah in :values.',
    'prohibits' => ':attribute bidang ini melarang :other untuk aktif.',
    'regex' => ':attribute format tidak valid.',
    'required' => ':attribute diperlukan.',
    'required_array_keys' => ':attribute harus diisi untuk: :values.',
    'required_if' => ':attribute diperlukan ketika :other adalah :value.',
    'required_unless' => '::attribute diperlukan setidaknya :other ada di dalam :values.',
    'required_with' => ':attribute diperlukan ketika :values ditampilkan.',
    'required_with_all' => ':attribute diperlukan ketika :values ditampilkan.',
    'required_without' => ':attribute diperlukan ketika :values tidak ditampilkant.',
    'required_without_all' => ':attribute diperlukan ketika tidak satupun dari :values ditampilkan.',
    'same' => ':attribute dan :other harus sama.',
    'size' => [
        'numeric' => ':attribute harus :size.',
        'file' => ':attribute harus :size kilobyte.',
        'string' => ':attribute harus :size karakter.',
        'array' => ':attribute harus memiliki :size item.',
    ],
    'starts_with' => ':attribute harus dimulai dengan salah satu dari berikut ini: :values.',
    'string' => ':attribute harus sebuah string.',
    'timezone' => ':attribute harus zona waktu yang valid.',
    'unique' => ':attribute telah digunakan.',
    'uploaded' => ':attribute gagal diupload.',
    'url' => ':attribute harus berupa URL yang valid.',
    'uuid' => ':attribute harus berup UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
