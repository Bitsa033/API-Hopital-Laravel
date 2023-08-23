<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAudienceRequest extends FormRequest
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
            'nom_patient'=>'required|string',
            'qualite'=>'required|string',
            'audience_type'=>'required|string',
            'objet'=>'required|string',
            'message'=>'required|text',
            'nom_personnel'=>'required|string',
        ];
    }
}
