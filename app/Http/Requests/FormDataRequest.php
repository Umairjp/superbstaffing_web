<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormDataRequest extends FormRequest
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
            'companyName' => 'required',
            'companyPhone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'zipCode' => 'required',
            'country' => 'required',
            'about' => 'required',
            'country' => 'required',
            'founded' => 'required',
            'type' => 'required',
            'industry' => 'required',
            'specialist' => 'required'
        ];
    }

    public function messages()
    {
        return [
            // 'username.required' => 'Name is Mendatory',
            // 'email.required' => 'Email is Mendatory',
            // 'password.required' => 'Password is Mendatory',
        ];
    }
}
