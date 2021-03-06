<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            'first_name'=>'required|string',
            'last_name'=>'required|string',
            'gender'=>'required|string',
            'age'=>'required|numeric',
            'mobile1'=>'required|numeric',
            'mobile2'=>'numeric',
            'telephone'=>'numeric',
            'email' => 'string|email',
        ];
    }
}
