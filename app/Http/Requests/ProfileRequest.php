<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,'.$this -> id,
            'password'  => 'nullable|confirmed|min:8'

        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('messages.insert value'),
            'email.required' => __('messages.insert value'),
            'email.email' => __('messages.insert true value'),
            'email.unique' => __('messages.Already exist'),


        ];
    }
}
