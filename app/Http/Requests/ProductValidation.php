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
            'product_stocks' => 'required|numeric',
            'product_price' => 'required|numeric',
            'product_description' => 'required'
        ];
        return $rules;
    }

    public function messages()
    {
        $messages =
        [
            'product_name.required'   => 'Required Fields cannot be left empty',
            'product_price.required'  => 'Required Fields cannot be left empty',
            'product_price.numeric'   => 'Required Fields can only be numeric',
            'product_stocks.required' => 'Required Fields cannot be left empty',
            'product_stocks.numeric'  => 'Required Fields can only be numeric'
        ];
        return $messages;
    }
}
