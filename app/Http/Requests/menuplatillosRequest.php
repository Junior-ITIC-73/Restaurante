<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class menuplatillosRequest extends FormRequest
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
            'nombre_platilo' => 'required',
            'precio_platillo' => 'required',
            'descripcion_platillo' => 'required',
            'fecha_platillo' => 'required',
        ];
    }
}
