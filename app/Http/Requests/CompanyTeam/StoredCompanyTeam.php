<?php

namespace App\Http\Requests\CompanyTeam;

use Illuminate\Foundation\Http\FormRequest;

class StoredCompanyTeam extends FormRequest
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
            'teams-name' => 'required|regex:/^[\p{L}\s\-.,?!]+$/u|max:255',
            'teams-img' => 'required|image|mimes:jpeg,png,jpg,gif',
        ];
    }
}
