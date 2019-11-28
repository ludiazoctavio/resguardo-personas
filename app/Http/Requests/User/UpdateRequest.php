<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'last_name_1' => 'required|string|max:255',
            'last_name_2' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'phone_extension' => 'numeric',
            'dependence_id' => 'required|numeric',
            'ascription_id' => 'numeric',
            'email' => 'required|string|email|unique:users,email,' . $this->route('user')->id . '|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo es requerido',
            'name.string' => 'El valor no es correcto',
            'name.max' => 'Solo se permiten 255 caracteres',
            'last_name_1.required' => 'El campo es requerido',
            'last_name_1.string' => 'El valor no es correcto',
            'last_name_1.max' => 'Solo se permiten 255 caracteres',
            'last_name_2.required' => 'El campo es requerido',
            'last_name_2.string' => 'El valor no es correcto',
            'last_name_2.max' => 'Solo se permiten 255 caracteres',
            'position.required' => 'El campo es requerido',
            'position.string' => 'El valor no es correcto',
            'position.max' => 'Solo se permiten 255 caracteres',
            'phone.required' => 'El campo es requerido',
            'phone.numeric' => 'Solo se permiten números',
            'phone_extension.numeric' => 'Solo se permiten números',
            'dependence_id.required' => 'El campo es requerido',
            'dependence_id.numeric' => 'El valor no es correcto',
            'ascription_id.numeric' => 'El valor no es correcto',
            'email.required' => 'El campo es requerido',
            'email.string' => 'El valor no es correcto',
            'email.max' => 'Solo se permiten 255 caracteres',
            'email.unique' => 'Este email ya está registrado',
        ];
    }
}
