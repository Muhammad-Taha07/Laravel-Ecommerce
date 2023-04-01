<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\BrandRequest;

class BrandRequest extends FormRequest
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
            'brand_name'        => 'required',
            'brand_description' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            '*.required'        => ':attribute cannot be left empty',
            '*.between'         => ':attribute must be between :min to :max',
            '*.min'             => ':attribute must have minimum size of :value',
            '*.max'             => ':attribute must have maximum size of :value',
        ];
    }
}
