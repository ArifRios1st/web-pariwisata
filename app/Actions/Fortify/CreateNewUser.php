<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'gender' => ['required'],
            'address' => ['required','string'],
            'birth_date' => ['required'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ],[],
        [
            'name' => __('fields.name'),
            'email' => __('fields.email'),
            'gender' => __('fields.gender'),
            'address' => __('fields.address'),
            'birth_date' => __('fields.birth_date'),
            'password' => __('fields.password'),
            'password_confirmation' => __('fields.confirm'),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'gender' => $input['gender'],
            'address' => $input['address'],
            'birth_date' => $input['birth_date'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
