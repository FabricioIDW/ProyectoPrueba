<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOferta extends FormRequest
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
     * @return array<string, mixed>
     */
    // Reglas de validación
    public function rules()
    {
        return [
            'descuento' => 'required|min:0.1|max:100',
            'fechaInicio' => 'required',
            'fechaFin' => 'required'
        ];
    }
    // Personaliza el nombre del atributo que muestra cuando hay un error
    public function  attributes()
    {
        return [
            'descuento' => 'descuento de la oferta',
            'fechaInicio' => 'fecha de inicio',
            'fechaFin' => 'fecha de fin',
        ];
    }
    // Personaliza los mensajes de error de la regla indicada
    public function messages()
    {
        return [
            'descuento.required' => 'El descuento es un campo obligatorio',
            'descuento.min' => 'El descuento minimo es del 0.1'
        ];
    }
}
