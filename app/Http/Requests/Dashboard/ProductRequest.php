<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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

    public function rules()
    {
        $image = request()->isMethod('put') ? 'nullable' : 'required';
        $rules = [
            'image' =>  $image ,
            'SKU'          => ['sometimes','required','string',Rule::unique('products', 'SKU')->ignore($this->product)], // SKU must be unique for each product
            'rate'       => 'sometimes|required|numeric|min:0|max:5', // rate must be a double in grams
            'price'       => 'sometimes|required|numeric|min:0', // price must be a double in grams
            'quantity'       => 'sometimes|required|numeric|min:0', // quantity must be a double in grams

            // Relationships
            'category_id' => 'sometimes|required|exists:categories,id', // Category must exist
            'subcategory_id' => 'sometimes|required|exists:subcategories,id', // Subcategory must exist
            
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['sometimes','required', 'string']];
            $rules += [$locale . '.description' => ['sometimes','required', 'string']];

        }
        return  $rules;
    }

}