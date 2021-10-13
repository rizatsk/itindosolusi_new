<?php

namespace App\Actions\Fortify;

use App\Models\User;
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
            'name' => ['required', 'string', 'min:4', 'max:50'],
            'username' => ['required', 'string', 'min:4', 'max:15', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:30', 'unique:users'],
            'no_handphone' => ['required', 'string','min:11' ,'max:13', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ],[
            'required' => ':attribute harus di isi',
            'string' => ':attribute harus di isi dengan benar',
            'min' => ':attribute di isi :min character',
            'max' => ':attribute di isi :max character',
            'unique' => ':attribute sudah ada !',
            'email' => 'Masukan :attribute yang aktif !',
            'confirmed' => ':attribute tidak sesuai !',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'username' => $input['username'],
            'email' => $input['email'],
            'no_handphone' => $input['no_handphone'],
            'accses' => 'user',
            'password' => Hash::make($input['password']),
        ]);
    }
}
