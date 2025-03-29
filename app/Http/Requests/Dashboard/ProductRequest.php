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
            'weight'       => 'sometimes|required|numeric|min:0', // Weight must be a double in grams
            'SKU'          => ['sometimes','required','string',Rule::unique('products', 'SKU')->ignore($this->product)], // SKU must be unique for each product

            // Relationships
            'category_id' => 'sometimes|required|exists:categories,id', // Category must exist
            'subcategory_id' => 'sometimes|required|exists:subcategories,id', // Subcategory must exist
            'brand_id'       => 'sometimes|required|exists:brands,id',        // Brand must exist
            'store_id'       => 'sometimes|required|exists:stores,id',        // Store must exist

            'variations.*.color_id' => 'sometimes|required|exists:colors,id',
            'variations.*.size_id' => 'sometimes|required|exists:sizes,id',
            'variations.*.price' => 'sometimes|required|numeric|min:0',
            'variations.*.quantity' => 'sometimes|required|integer|min:0',
            
            'offers' => 'sometimes|nullable', 
            'offers.*.start_date' => 'sometimes|required_if:offers.*.start_date,null|date',
            'offers.*.end_date' => 'sometimes|required_if:offers.*.end_date,null|date|after:offers.*.start_date',
            'offers.*.percentage' => 'sometimes|required_if:offers.*.percentage,null|numeric|min:0|max:100',

            'color' => 'sometimes|required|string|max:7'
            
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['sometimes','required', 'string']];
            $rules += [$locale . '.description' => ['sometimes','required', 'string']];

        }
        return  $rules;
    }

}