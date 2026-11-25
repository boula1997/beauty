<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class SizeRequest extends FormRequest
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
        ];
        foreach (config('translatable.locales') as $locale) {
            // Keep size labels short; block runs like "5XXXXX" (same letter 4+ times).
            // Numeric sizes (e.g. 38) stay allowed.
            $rules += [$locale . '.title' => ['required', 'string', 'max:20', 'not_regex:/(\p{L})\1{3,}/u']];
        }
        return  $rules;
    }

    public function messages()
    {
        $messages = [];
        foreach (config('translatable.locales') as $locale) {
            $messages[$locale . '.title.not_regex'] = __('general.size_title_repeated');
        }
        return $messages;
    }

}
