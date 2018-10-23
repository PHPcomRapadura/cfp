<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TalkFormRequest extends FormRequest
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
            'titulo' => 'required|max:150',
            'event_id' => 'required',
            'nivel_id' => 'required',
            'trilha' => 'required',
            'descricao' => 'required|max:400',
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
        
            'titulo.required' => 'O Titulo da palestra é obrigatório!',
            'event_id.required' => 'Por favor selecione um evento!',
            'nivel_id.required' => 'Por favor selecione um nível!',
            'trilha.required' => 'Por favor selecione um trilha!',
            'descricao.required' => 'A descrição da palestra é obrigatória!',
        ];
    }
}
