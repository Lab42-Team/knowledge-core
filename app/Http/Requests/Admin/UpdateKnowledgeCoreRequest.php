<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKnowledgeCoreRequest extends FormRequest
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
            'description' => 'string|nullable',
            'phone' => 'string|nullable',
            'email' => 'string|nullable',
            'address' => 'string|nullable',
            'references' => 'string|nullable',
            'lab_link' => 'string|nullable',
            'github_link' => 'string|nullable',
        ];
    }
}