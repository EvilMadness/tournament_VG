<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonajeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string|max:45',
            'descripcion' => 'required|string|max:150',
            'imagen' => 'required|string|max:45',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'El campo no puede quedar vacio',
        ];
    }
}
