<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResumeRequest extends FormRequest
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
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'nullable|email',
            'bday' => 'date',
            'linl' => 'nullable|url'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Необходимо указать имя',
            'phone.required' => 'Необходимо указать телефон',
            'email' => 'Указан неверный формат E-mail',
            'bday' => 'Указан неверный формат даты рождения',
            'link' => 'Указан неверный формат даты ссылки'
        ];
    }
}
