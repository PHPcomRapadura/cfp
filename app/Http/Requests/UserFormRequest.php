<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [ 

             'name' => 'required|max:150',
             'apelido' => 'required|max:60',
             'git' => 'max:150',
             'email' => 'required|email|max:150|unique:users',
             'required_with:password-confirm|password|max:20',
             'password-confirm' => 'confirmed|max:20',
             'foto' => 'image|mimes:jpg,png,jpeg',
             'cidade' => 'required|max:80',
             'estado' => 'required|max:60',
             'biografia' => 'required|max:250'
            
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [   
        
            'name.required' => 'O campo Nome é obrigatório!',
            'apelido.required' => 'O campo Apelido é obrigatório!',
            'email.required' => 'O campo Email é obrigatório!'
            'cidade.required' => 'O campo Cidade é obrigatório!',
            'estado.required' => 'O campo Estado é obrigatório!',
            'biografia.required' => 'O campo Biografia é obrigatório!'
        ];
    }
}
