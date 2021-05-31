<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class resetRequest extends FormRequest
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
          'token'=>'required',
          'email'=>'required|max:300|min:10|email',
          'password'=>'required|min:6|max:20|confirmed'
        ];
    }
}