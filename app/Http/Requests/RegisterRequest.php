<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'phone_number' => 'required',
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
