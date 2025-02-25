<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'category_id' => 'required',
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required', 'string']];
            $rules += [$locale . '.subtitle' => ['required', 'string']];
            $rules += [$locale . '.description' => ['required']];
        }
        return  $rules;
    }

}