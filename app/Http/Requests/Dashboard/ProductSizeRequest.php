<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class ProductSizeRequest extends FormRequest
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
        //to add or remove input from request in validation class use $this->merge
        //  $this->merge(['user_id' => auth('api')->user()->id]);


        $rules = [

            'product_id'=>'required',
            'size_id'=>'required',
            'stock'=>'required|numeric',
            'price'=>'required|numeric',
        ];
        foreach (config('translatable.locales') as $locale) {
            // $rules += [$locale . '.title' => ['required', 'string']];
            // $rules += [$locale . '.description' => ['required', 'string']];
        }
        return  $rules;
    }

}
