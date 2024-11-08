<?php

namespace App\Http\Requests\Authentication;

use Illuminate\Foundation\Http\FormRequest;

class OtpCodeRequest extends FormRequest
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
            'email' => 'required|min:3|max:128|email',
            'code' => 'required|min:4|max:6',
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'L\'email est invalide.',
            'code.required' => 'Le code est invalide.',
            'code.min' => 'Le code doit contenir au minimum 4 caractères.',
            'code.max' => 'Le code doit contenir au maximum 6 caractères.',
        ];
    }
}
