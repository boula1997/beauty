<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class ChooseUsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'emoji' => ['required', 'string'],
        ];

        foreach (config('translatable.locales') as $locale) {
            $rules[$locale . '.title'] = ['required', 'string'];
            $rules[$locale . '.description'] = ['required', 'string'];
        }

        return $rules;
    }
}
