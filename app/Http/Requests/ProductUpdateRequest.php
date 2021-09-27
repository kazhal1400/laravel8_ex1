<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'nullable|string',
            'price' => 'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'name.string' => 'فیلد نام باید رشته باشد',
            'price.numeric' => 'فیلد فیمت باید عدد باشد'
        ];
    }
}
