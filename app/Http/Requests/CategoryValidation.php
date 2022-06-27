<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryValidation extends FormRequest
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
     * Get the validation rules that apply  to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rule = [
            'category_name' => 'required',
            'category_description' => 'required'
        ];

        return $rule;
    }

    public function messages()
    {
        return [
        'category_name.required' => 'Required fields cannot be left empty',
        'category_description.required' => 'Required fields cannot be left empty'
        ];
    }
}
