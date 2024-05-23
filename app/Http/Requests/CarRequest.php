<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
             'name'=>'required|string',
            'price'=>'required|integer',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:100000'
        ];
    }

    public function messages()
    {
      return[
        'name.required' => 'The name field is required.',
        'name.string' => 'The name must be a string.',
        'name.max' => 'The name must not exceed 255 characters.',
        
        'price.required' => 'The price field is required.',
        'price.integer' => 'The price must be an integer.',
        'price.min' => 'The price must be at least 0.',
        
        'image.required' => 'The image field is required.',
        'image.image' => 'The file must be an image.',
        'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
        'image.max' => 'The image must not be greater than 100000 kilobytes.',
    ];
    }
}
