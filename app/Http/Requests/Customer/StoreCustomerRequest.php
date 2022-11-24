<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name'      => ['required' ,'string', 'max:15'],
            'ruc'       => ['required' ,'integer'],
            'email'     => ['required' ,'email'],
            'page'      => ['required' ,'url'],
            'status'    => ['required' ,'boolean'],
        ];
    }
    public function messages()
    {
        return [
            'name.required'     => 'Introducir Nombre',
            'name.string'       => 'El campo nombre debe ser un texto',
            'email.required'    => 'Introducir Email',
            'email.email'       => 'Debe de introducir un correo en el campo Email',
            'page.required'     => 'Introducir URL',
            'page.url'          => 'Debe de ungresar un URL',
            'name.max'          => 'El campo nombre debe tener longitud maximo 15',
            'status.required'   => 'Introducir estado',
            'status.boolean'    => 'El campo estado debe ser true o false',
            'ruc.required'      => 'Introducir RUC',
            'ruc.integer'       => 'El campo RUC debe ser un numero',
        ];
    }
}
