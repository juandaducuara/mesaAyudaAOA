<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class loginRequest extends FormRequest
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
            'usuario'=> 'required',            
            'clave'=>'required|min:8'
        ];
    }

    public function getCredentials(){
        $usuario = $this->get('usuario');
        if ($this->isEmail($usuario)) {
            return [
                'email'=> $usuario,
                'clave'=> $this->get('clave')
            ];
        }
        return $this->only('usuario','clave');
    }

    public function isEmail($value){
        $factory = $this->container->make(ValidationFactory::class);
        return !$factory->make(['usuario'=> $value],['usuario'=>'email'])->fails();
    }
}
