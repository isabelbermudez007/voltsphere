<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'user_id' => 'required',
			'sector_id' => 'required',
			'nombre' => 'required|string',
			'apellido' => 'required|string',
			'direccion' => 'required|string',
			'telefono' => 'required|string',
			'email' => 'required|string',
			'cumple' => 'required|string',
			'puesto' => 'required|string',
			'sueldo' => 'required|string',
			'comision_vendedor' => 'required|string',
        ];
    }
}
