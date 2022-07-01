<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductValidation extends FormRequest
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
        $rules =
        [
            'product_name' => 'required',
            'product_description' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ];
        return $rules;
    }

    public function messages()
    {
        $messages =
        [
            'product_name.required'        => 'Required Fields cannot be left empty',
            'product_description.required' => 'Required Fields cannot be left empty',
            'price.required' => 'Required Fields cannot be left empty',
            'stock.required' => 'Required Fields cannot be left empty'
        ];
        return $messages;
    }
}
