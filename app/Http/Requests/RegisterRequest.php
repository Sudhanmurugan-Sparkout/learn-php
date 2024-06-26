<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=>'required|string|max:20',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|confirmed'
        ];
        
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string> The error messages.
     */
    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',  
            'name.string' => 'The name must be a string.',   
            'name.max' => 'The name must not exceed 20 characters.',  
            
            'email.required' => 'The email field is required.',  
            'email.unique' => 'Email must be unique.',  

            'password.required' => 'Password must be required.', 
            'password.confirm' => 'Password and confirm password do not match.',  
        ];
    }
}
