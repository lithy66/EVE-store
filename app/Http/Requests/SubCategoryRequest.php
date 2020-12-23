<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest
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
            'parent_id' => 'required|exists:categories,id',
            'name' => 'required',
            'slug' => 'required|unique:categories,slug,'.$this -> id,
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('messages.insert value'),
            'slug.required' => __('messages.insert value'),
            'slug.unique' => __('messages.Already exist'),
        ];
    }
}
