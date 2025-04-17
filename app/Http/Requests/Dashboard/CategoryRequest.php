<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        // 'type' =>  'required' ,
   
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required', 'string']];
        }
        return  $rules;
    }

}