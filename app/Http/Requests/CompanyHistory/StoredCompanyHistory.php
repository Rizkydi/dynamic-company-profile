<?php

namespace App\Http\Requests\CompanyHistory;

use Illuminate\Foundation\Http\FormRequest;

class StoredCompanyHistory extends FormRequest
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
            'histories-title' => 'required',
            'histories-year' => 'required',
            'histories-description' => 'required|max:500',
            'histories-img' => 'required|image|mimes:jpeg,png,jpg,gif',
        ];
    }
}
