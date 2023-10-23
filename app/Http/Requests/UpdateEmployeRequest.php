<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeRequest extends FormRequest
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
            'nom'=>'required|string|unique:employes',
            'email'=>'required|string|unique:employes',
            'telephone'=>'required|integer|min:9|unique:employes',
            'adresse'=>'required|string',
            'fonction'=>'required|string',
        ];
    }
}
