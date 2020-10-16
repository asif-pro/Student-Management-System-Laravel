<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoutineRequests extends FormRequest
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


      'sID'    => 'required',
      'sName'    => 'required',
      'class'       => 'required',
      'subName' => 'required',
      'tName'      => 'required',
      'tID'        => 'required',
      'sTime'  => 'required',
      'fTime' => 'required',
      'day'         => 'required'
    
    ];
    }
}
