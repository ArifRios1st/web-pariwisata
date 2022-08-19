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

    'user' => [
        'name' => 'Nama Lengkap',
        'email' => 'Alamat Email',
        'gender' => 'Jenis Kelamin',
        'genders' => [
            'm' => 'Laki-laki',
            'f' => 'Perempuan',
        ],
        'birth_date' => 'Tanggal Lahir',
        'address' => 'Alamat',
        'password' => 'Kata Sandi',
        'confirm_password' => 'Konfirmasi Kata Sandi',
    ],
    'button' => [
        'login' => 'Masuk',
        'register' => 'Daftar',
        'save' => 'Simpan',
        'delete' => 'Hapus',
        'edit' => 'Edit',
        'view' => 'Lihat',
    ],
    'saved' => 'Tersimpan.',
    'done' => 'Berhasil.',
    'rememberme' => 'Ingat Saya',
    'profile' => [
        'info' => [
            'title' => 'Informasi Profil',
            'desc' => "Perbarui informasi profil dan alamat email akun Anda.",
            'buttonselect' => 'PILIH FOTO BARU',
            'buttonremove' => 'HAPUS FOTO',
        ],
        'password' => [
            'title' => 'Perbarui Password',
            'desc' => 'Pastikan akun Anda menggunakan kata sandi acak yang panjang agar tetap aman.',
            'current' => 'Password Sekarang',
            'new' => 'Password Baru',
            'confirm' => 'Ketik Ulang Password Baru',
        ],
        'session' => [
            'title' => 'Browser Sessions',
            'desc' => 'Manage and log out your active sessions on other browsers and devices.',
            'text' => 'If necessary, you may log out of all of your other browser sessions across all of your devices. Some of your recent sessions are listed below; however, this list may not be exhaustive. If you feel your account has been compromised, you should also update your password.',
            'button' => 'LOG OUT OTHER BROWSER SESSIONS',
            'last' => 'Last Active',
            'this' => 'This Device',
        ],
        'delete' => [
            'title' => 'Delete Account',
            'desc' => 'Permanently delete your account.',
            'text' => 'Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.',
            'button' => 'DELETE ACCOUNT',
            'modal' => 'Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.
            Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.',
        ],
    ],

];
