<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class ColorRequest extends FormRequest
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
            'hexCode'  => 'required|regex:/^#([A-Fa-f0-9]{6})$/',
        ];
        foreach (config('translatable.locales') as $locale) {
            // A color name must be a real name, not just a number (e.g. "2").
            $rules += [$locale . '.title' => ['required', 'string', 'max:50', 'not_regex:/^\s*[\d\x{0660}-\x{0669}]+\s*$/u']];
        }
        return  $rules;
    }

    public function messages()
    {
        $messages = [];
        foreach (config('translatable.locales') as $locale) {
            $messages[$locale . '.title.not_regex'] = __('general.color_title_not_numeric');
        }
        return $messages;
    }

}