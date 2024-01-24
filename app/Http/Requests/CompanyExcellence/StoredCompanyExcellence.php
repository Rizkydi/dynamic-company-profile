<?php

namespace App\Http\Requests\CompanyExcellence;

use Illuminate\Foundation\Http\FormRequest;

class StoredCompanyExcellence extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'excellence-title' => 'required|regex:/^[\p{L}\s\-.,?!]+$/u|max:255',
            'excellence-description' => 'required|max:500',
            'excellence-img' => 'required|image|mimes:jpeg,png,jpg,gif'
        ];
    }
}
