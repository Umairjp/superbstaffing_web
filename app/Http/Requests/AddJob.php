<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddJob extends FormRequest
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
            'job_title' => 'required',
            'status' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'timming' => 'required',
            'payment' => 'required',
            'hourly_rate' => 'required',
            'job_type' => 'required',
            'resources' => 'required'
        ];
    }
}
