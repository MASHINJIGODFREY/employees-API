<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'unique:users', 'max:255'],
            'password' => ['required', 'min:8', 'confirmed', 'max:255'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'name is required',
            'name.max' => 'name is too long (255 characters maximum)',
            'email.required' => 'E-mail address is required',
            'email.email' => 'E-mail address is invalid',
            'email.unique' => 'E-mail address is used by another user',
            'email.max' => 'E-mail address is too long (255 characters maximum)',
            'password.required' => 'password is required',
            'password.min' => 'password should not be less than 8 characters',
            'password.confirmed' => 'passwords do not match',
            'password.max' => 'password is too long (255 characters maximum)',
        ];
    }
}