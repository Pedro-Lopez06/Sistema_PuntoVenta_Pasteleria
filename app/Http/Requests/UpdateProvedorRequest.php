<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProvedorRequest extends FormRequest
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

    
    public function rules()
    {
        return [
            'nombre','required'|string|'max:255', 
            'correo', 'required'|email|string|'|unique:provedors,correo,'.$this->route('provedor')->id.'max:200',
            'numero', 'required'|string|'max:11|unique:provedors,numero,'.$this->route('provedor')->id.'max:11',
            'direccion', 'nullable'|string|'max:255',
            'telefono','required'|string|'min:9|unique:provedors,telefono,'.$this->route('provedor')->id.'max:9',
        ];
    }
    public function messages(){
        return[
            'nombre.required'=>'Este campo es requerido.',
            'nombre.string'=>'El valor no es correcto.',
            'nombre.max'=>'Solo se permiten 255 caracteres.',

            'correo.required'=>'Este campo es requerido.',
            'correo.email'=>'No es un correo electrónico.',
            'correo.string'=>'El valor no es correcto.',
            'correo.max'=>'Solo se permiten 255 caracteres.',
            'correo.unique'=>'Ya se encuentra registrado.',
            
            'numero.required'=>'Este campo es requerido.',
            'numero.string'=>'El valor no es correcto.',
            'numero.max'=>'Solo se permiten 11 caracteres.',
            'numero.unique'=>'Ya se encuentra registrado.',

            'direccion.string'=>'El valor no es correcto.',
            'direccion.max'=>'Solo se permiten 255 caracteres.',

            'numero.required'=>'Este campo es requerido.',
            'numero.string'=>'El valor no es correcto.',
            'numero.max'=>'Solo se permiten 9 caracteres.',
            'numero.unique'=>'Ya se encuentra registrado.',
        ];
    }
}
