<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventFormRequest extends FormRequest
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
            'datainicial' => 'required',
            'datafinal' => 'required',
            'datafimdocfp' => 'required',
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
        
            'name.required' => 'O Nome do evento é obrigatório!',
            'datainicial.required' => 'A data de início do evento é obrigatória!',
            'datafinal.required' => 'A data do fim do evento é obrigatória!',
            'datafimdocfp.required' => 'A data do fim do cfp é obrigatória!',
        ];
    }
}
