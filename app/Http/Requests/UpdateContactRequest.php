<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'min:5'],
            'contact' => ['required', 'unique:contacts,contact,' . $this->request->get('id'), 'min:9', 'max:9'],
            'email' => ['required', 'unique:contacts,email,' . $this->request->get('id')],
        ];
    }
}
