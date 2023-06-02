<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudanteRequest extends FormRequest
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
            'curso' => 'required',
            'nome_completo' => 'required',
            'email' => 'required',
            'endereco' => 'required',
            'registro_academico' => 'required',
            'periodo' => 'required',
            'forma_integracao' => 'required'
        ];
    }
}
