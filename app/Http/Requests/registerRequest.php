<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'nombre'=> 'required',
            'apellido'=>'required',
            'usuario'=> 'required|unique:usuarios,usuario',
            'email'=>'required|unique:usuarios,email',
            'tipo_usuario'=>'required',
            'clave'=>'required|min:8',
            'clave_confirmacion'=>'required|same:clave',
            'estado'=>'required'

        ];
    }
}
