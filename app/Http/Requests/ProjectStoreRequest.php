<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=> 'required|max:255',
            'img'=>'required||active_url|max:5120',
            'description'=> 'required|max:255',
            'dete'=> 'date',
            'programming_languages' => 'required|max:255'
        ];

        
    }





    //modifica dei messages di errore 
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'il titolo e corto',
            'description.required' => 'non oltre 355 caratteri ',
        ];
    }
}
