<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormUser extends FormRequest
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

               // 'name'=>'required|alpha_dash',
               'sexo'=>'required|boolean',
               'calle'=>'required|alpha_dash',
               'telefono_user'=>'required|numeric',
               'num_interior'=>'required|numeric',
               'num_exterior'=>'required|numeric',
               'CP'=>'required|numeric',
               'localidad'=>'required|alpha_dash'
                
            ];
       }
   }
