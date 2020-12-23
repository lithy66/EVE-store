<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShippingRequest extends FormRequest
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
            'id' => 'required|exists:settings',
            'value' => 'required',
            'plane_value' => 'numeric|nullable',
        ];
    }

    public function messages()
    {
        return [
            'value.required' => __('messages.insert value'),
            'plane_value.required' => __('messages.insert value'),
            'plane_value.numeric' => __('messages.insert true value'),

        ];
    }
}
