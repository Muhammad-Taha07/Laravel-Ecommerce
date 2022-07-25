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
            'stock' => 'required|numeric',
            'price' => 'required|numeric'
        ];
        return $rules;
    }

    public function messages()
    {
        $messages =
        [
            'product_name.required'   => 'Required Fields cannot be left empty',
            'price.required'  => 'Required Fields cannot be left empty',
            'price.numeric'   => 'Required Fields can only be numeric',
            'stock.required' => 'Required Fields cannot be left empty',
            'stock.numeric'  => 'Required Fields can only be numeric'
        ];
        return $messages;
    }
}
