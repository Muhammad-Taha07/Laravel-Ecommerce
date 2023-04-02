<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category_id'   => 'required',
            'brand_id'      => 'required',
            'product_name'  => 'required',
            'product_image' => 'required',
            'description'   => 'required',
            'stock'         => 'required|numeric',
            'price'         => 'required|numeric',
        ];
        return $rules;
    }

    public function messages()
    {
        $messages =
        [
            'category_id.required'    => 'Category selection is required.',
            'brand_id.required'       => 'Brand Selection is required',
            'product_name.required'   => 'Required Fields cannot be left empty',
            'product_image.required'  => 'Product Image should be uploaded when creating a product.',
            'description'             => 'Product Description is required',
            'price.required'          => 'Required Fields cannot be left empty',
            'price.numeric'           => 'Required Fields can only be numeric',
            'stock.required'          => 'Required Fields cannot be left empty',
            'stock.numeric'           => 'Required Fields can only be numeric'
        ];
        return $messages;
    }
}
