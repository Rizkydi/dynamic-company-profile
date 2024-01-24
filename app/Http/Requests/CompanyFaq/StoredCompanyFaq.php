<?php

namespace App\Http\Requests\CompanyFaq;

use Illuminate\Foundation\Http\FormRequest;

class StoredCompanyFaq extends FormRequest
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
            'faq-question' => 'required|regex:/^[\p{L}\s\-.,?!]+$/u|max:255',
            'faq-answer' => 'required|regex:/^[\p{L}\s\-.,?!]+$/u|max:255',
        ];
    }
}
