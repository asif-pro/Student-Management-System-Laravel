<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParentRequests extends FormRequest
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
            'name'           => 'required|regex:/^[a-zA-Z\s\.]*$/',
            'email'          => 'required|email:rfc,dns',
            'parentrelation' => 'required|regex:/^[a-zA-Z\s]*$/',
            'phone'          => 'required | numeric | digits:10 | starts_with:13,14,15,16,17,18,19'
        ];
    }

    public function messages()
    {
        return [
            
        ];
    }
}
