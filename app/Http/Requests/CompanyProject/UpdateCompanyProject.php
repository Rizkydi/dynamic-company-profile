<?php

namespace App\Http\Requests\CompanyProject;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyProject extends FormRequest
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
            'id' => 'required',
            'project-client' => 'nullable|regex:/^[\p{L}\s\-.,?!]+$/u|max:255',
            'project-name' => 'nullable',
            'project-description' => 'nullable',
            'project-img' => 'nullable|image|mimes:jpeg,png,jpg,gif'
        ];
    }
}