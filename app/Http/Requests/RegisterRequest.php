<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:'. Str::plural($this->role),
            'password' => 'required|min:8',
            'phone_number' => 'required|unique:'. Str::plural($this->role),
            'subscription' => [
                'required',
                Rule::in(['Free', 'Premium'])
            ],
            'role' => [
                'required',
                Rule::in(['Dentist', 'Technician'])
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute is required',
            'email.email' => 'Invalid email',
            'email.unique' => 'Email already exists',
            'phone_number.unique' => 'Phone number already exists',
            'subscription.in' => 'Invalid subscription',
            'role.in' => 'Invalid role'
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => false,
            'errors' => $validator->errors()->all()
        ]));
    }
}
