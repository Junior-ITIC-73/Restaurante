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
               'name'=>'required|not_regex:/[0-9]/',
               'email' => 'required|email|unique:users',
               'password' => 'required|min:6|confirmed', 
               'password_confirmation' =>'required|min:6|same:password',
               'sexo'=>'required|boolean',
               'telefono_user'=>'required|numeric',
               'calle'=>'required',
               'num_interior'=>'required|numeric',
               'num_exterior'=>'required|numeric',
               'CP'=>'required|numeric',
               'localidad'=>'required|not_regex:/[0-9]/',
            ];
       }
   }
