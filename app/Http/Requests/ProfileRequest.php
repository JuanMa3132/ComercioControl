<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Asegúrate de configurar la autorización según tus necesidades
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // Define las reglas de validación para los campos de tu formulario
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'photo' => ['mimes:png,jpg,jpeg']
            // Otras reglas de validación según tus necesidades
        ];
    }
}
