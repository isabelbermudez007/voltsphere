<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
			'cliente_id' => 'required',
			'empleado_id' => 'required',
			'info' => 'required|string',
			'factura' => 'required',
			'fecha' => 'required',
			'observaciones' => 'required|string',
        ];
    }
}
