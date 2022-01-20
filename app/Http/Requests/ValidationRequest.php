<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
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
            'subject' => 'required|min:10|max:50',
            'message' => 'required|min:15|max:500',
            'email' => 'email:rfc,dns',
            'phone' => 'required|min:13|max:13|numeric',
            'name' => 'required'
        ];
    }
}
