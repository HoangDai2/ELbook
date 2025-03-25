<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
            'role_id' => 'required|integer',
            'phoneNumber' => 'required|string',
            'address' => 'required|string',
            'dateOfBirth' => 'required|date',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'email.unique' => 'Email is already taken',
            'password.required' => 'Password is required',
            'role_id.required' => 'Role is required',
            'role_id.integer' => 'Role is invalid',
            'phoneNumber.required' => 'Phone number is required',
            'address.required' => 'Address is required',
            'dateOfBirth.required' => 'Date of birth is required',
            'dateOfBirth.date' => 'Date of birth is invalid',
        ];
    }
}
