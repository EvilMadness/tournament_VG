<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConcursanteRequest extends FormRequest
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
            'nombre' => 'required|string|max:50',
            'apaterno' => 'required|string|max:45',
            'amaterno' => 'required|string|max:45',
            'email' => 'required|string|max:50',
            'nickname' => 'required|string|max:45',
            'password' => 'string|max:100',
            'id_carrera' => 'required|int|max:50',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'El campo no puede quedar vacio',
        ];
    }

}
