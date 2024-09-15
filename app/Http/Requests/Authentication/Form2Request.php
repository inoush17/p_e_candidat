<?php

namespace App\Http\Requests\Authentication;

use Illuminate\Foundation\Http\FormRequest;

class Form2Request extends FormRequest
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
            'birth_certificate' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'identity_card' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'latest_bulletin' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'cover_letter' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048',
            'file_annex' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ];
    }
}
