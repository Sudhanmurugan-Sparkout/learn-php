<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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

            'email' => 'required',

        ];
    }
    
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string> The error messages.
     */
    public function message()
    {
        return [

            'email.required' => 'the email field is required',

        ];
    }
}
