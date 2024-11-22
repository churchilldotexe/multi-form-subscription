<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoRequest extends FormRequest
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
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:App\\Models\\User'],
            'phone' => ['required', 'min:10'],

        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute field is required',
            'min' => 'Atleast :min character is required',
            'email.email' => 'Please provide a valid email',
            'email.unique' => 'Email already taken',
        ];
    }
}
