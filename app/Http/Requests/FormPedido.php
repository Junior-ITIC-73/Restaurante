<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormPedido extends FormRequest
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
            'user_id' => 'required|numeric',
            'fecha_pedido' => 'required|date|',
            'estado_pedido' => 'required|boolean',
            'total_pedido' => 'required|numeric',
            'mesa_id' => 'required|numeric',
        ];
    }
}
