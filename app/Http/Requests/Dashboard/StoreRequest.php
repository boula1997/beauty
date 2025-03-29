<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StoreRequest extends FormRequest
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
        $image=request()->isMethod('put')?'nullable':'required';
        
        $rules = [
            'image' => $image,
            'category_id'   => 'required|array|min:1', // Ensure it's an array with at least one item
            'category_id.*' => 'exists:categories,id', // Each ID must exist in the categories table
            'brand_id'   => 'required|array|min:1', // Ensure it's an array with at least one item
            'brand_id.*' => 'exists:brands,id', // Each ID must exist in the brands table
            'banner'        => 'required',
            'phone'         => 'required|string|regex:/^\+9665\d{8}$/',
            'email'         => ['required','email',Rule::unique('stores', 'email')->ignore(request()->isMethod('put')?$this->store->id:$this->id)],
            'deliveryCharge' => 'required|numeric|min:0', 

        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required', 'string']];
            $rules += [$locale . '.description' => ['required', 'string']];
        }
        return  $rules;
    }

}