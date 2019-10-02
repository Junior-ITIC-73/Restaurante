<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormMesa extends FormRequest
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
            'numero_mesa' => 'required|numeric',
            'descripcion_mesa' => 'required|alpha_dash',
        ];
    }
}
