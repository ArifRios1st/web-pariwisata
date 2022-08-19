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
    'name' => "Name",
    'email' => 'Email Address',
    'password' => 'Password',
    'gender' => 'Gender',
    'genders' => [
        'm' => 'Male',
        'f' => 'Female',
    ],
    'confirm' => 'Confirm Password',
    'birth_date' => 'Date of Birth',
    'address' => 'Address',
    'phone' => 'Phone Number',
    'login' => 'Login',
    'register' => 'Register',
    'logout' => 'Logout',
    'registered' => 'Already Registered ?',
    'remember' => 'Remember me',
    'forget' => 'Forgot your password ?',
    'forgot_message' => "forgot your password? No problem. Just tell us your email address and we'll email you a password reset allowing you to choose a new one.",
    'send_reset_link' => ' Email Password Reset Link',
    'submit' => 'Submit',
    'save' => 'Save',
    'saved' => 'Saved',
    'done' => 'Done.',
    'cancle' => 'Cancel',
    'delete' => 'Delete',
    'edit' => 'Edit',
    'profile' => [
        'info' => [
            'title' => 'Profile Information',
            'desc' => "Update your account's profile information and email address.",
            'buttonselect' => 'SELECT A NEW PHOTO',
            'buttonremove' => 'REMOVE PHOTO',
        ],
        'password' => [
            'title' => 'Update Password',
            'desc' => 'Ensure your account is using a long, random password to stay secure.',
            'current' => 'Current Password',
            'new' => 'New Password',
            'confirm' => 'Confirm Password',
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
