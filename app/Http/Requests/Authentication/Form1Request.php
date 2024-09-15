<?php

namespace App\Http\Requests\Authentication;

use Illuminate\Foundation\Http\FormRequest;

class Form1Request extends FormRequest
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
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'phone_number' => 'required|string|max:15',
            'nationality' => 'required|string|max:255',
            'sex' => 'required|in:Homme,Femme',
            'marital_status' => 'required|string',
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         'email.email' => 'L\'adresse e-mail est invalide.',
    //         'email.required' => 'L\'adresse e-mail est requise.',
    //         'email.min' => 'L\'e-mail doit contenir au minimum 3 caractères.',
    //         'email.max' => 'L\'e-mail doit contenir au maximum 128 caractères.',
    //         'password.required' => 'Le mot de passe est requis.',
    //         'password.min' => 'Le mot de passe  doit contenir au minimum 6 caractères.',
    //         'password.max' => 'Le mot de passe  doit contenir au maximum 64 caractères.',
    //     ];
    // }
}
