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
    $image = request()->isMethod('put') ? '' : 'required';

    $rules = [
        'image'        => $image,
        // 'SKU'          => ['sometimes','required','string',Rule::unique('products', 'SKU')->ignore($this->product)], // ✅ لازم يكون موجود
        // 'rate'         => 'required|numeric|min:0|max:5', // ✅ لازم يكون موجود
        'price'        => 'required|numeric|min:0',
        'quantity'     => 'required|numeric|min:0',

        'category_id'    => 'required|exists:categories,id',
        // 'subcategory_id' => 'required|exists:subcategories,id',
    ];

    foreach (config('translatable.locales') as $locale) {
        $rules += [$locale . '.title' => ['required', 'string']];
        $rules += [$locale . '.description' => ['required', 'string']];
    }

    return $rules;
}


}