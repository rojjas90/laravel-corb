<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreTaskRequest extends Request
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
          'name' => 'required|alpha_num|max:10|unique:todos', // por default toma el del name si no se defina el campo de la tabla
          'priority' => 'required'
          //,
          // 'color' => 'regex:/#[a-f0-9]{6}/'
          // 'color' => 'regex:/[a-f0-9]{6}/'
        ];
    }

    public function messages()
    {
      return [
        'name.required' => 'El campo name es necesario',
        'priority.required' => 'El campo priority es necesario',
        'color.required' => 'El color en hexadecimal'
      ];
    }
}
