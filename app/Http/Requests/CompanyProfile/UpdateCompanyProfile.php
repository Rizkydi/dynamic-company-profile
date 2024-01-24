<?php

namespace App\Http\Requests\CompanyProfile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyProfile extends FormRequest
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
            'name' => 'required|regex:/^[\p{L}\s\-.,?!]+$/u|max:255',
            'description' => 'required|max:500',
            'address' => 'required|max:255',
            'phone' => 'required|max:12',
            'email' => 'required|email',
            'logo_url' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
}
