<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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

        $image = request()->isMethod('put') ? 'nullable' : 'required';

        $rules = [
            'image' =>  $image ,
            'store_id'=> 'nullable|exists:stores,id',
            'category_id'=> 'required|exists:categories,id',
            'type'=> 'required',
        ];
        foreach (config('translatable.locales') as $locale) {
        }
        return  $rules;
    }

}
