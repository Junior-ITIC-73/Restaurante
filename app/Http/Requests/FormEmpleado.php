<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormEmpleado extends FormRequest
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
            'name'=>'required|not_regex:/[0-9]/',
            'apellido_paterno' => 'required|not_regex:/[0-9]/' ,
            'apellido_materno' => 'required|not_regex:/[0-9]/' ,
            'sexo'=>'required|boolean',
            'telefono_empleado'=>'required|numeric',
            'calle'=>'required',
            'num_interior'=>'required|numeric',
            'num_exterior'=>'required|numeric',
            'CP'=>'required|numeric|min:5',
            'localidad'=>'required|not_regex:/[0-9]/',
        ];
    }
}
