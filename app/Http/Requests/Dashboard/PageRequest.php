<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
        $rx = '~ ^(?:https?://)?  
        (?:www[.])?  (?:youtube[.]com/watch[?]v=|youtu[.]be/) (w/ query string in .com) ([^&]{11}) group 1 ~x'; 

        $rules = [
            // 'youtube_link' => $rx,
            'identifier' => 'required' ,
        ];
        foreach (config('translatable.locales') as $locale) {
            $rules += [$locale . '.title' => ['required', 'string']];
            $rules += [$locale . '.description' => ['nullable']];
        }
        return  $rules;
    }

 
}

