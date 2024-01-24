<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyServiceRequest extends FormRequest
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
            'id' => 'sometimes',
            'service-title' => 'required|regex:/^[\p{L}\s\-.,?!]+$/u|max:255',
            'service-description' => 'required|max:500',
            'service-img' => 'required|image|mimes:jpeg,png,jpg,gif'
        ];
    }
}
