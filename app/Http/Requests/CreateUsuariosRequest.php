<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUsuariosRequest extends FormRequest
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
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'direccion' => ['required', 'string', 'min:8'],
            'fechaNacimiento' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'roles_id'=>['required','exists:roles,id'],
            //
        ];
    }
    public function massages(){
        return[
            'nombre.required' => ['El nombre es Requerido'],
            'apellido.required' => ['El apellido es Requerido'],
            'direccion.required' => ['La dirección es Requerido'],
        ];
        
    }
}
