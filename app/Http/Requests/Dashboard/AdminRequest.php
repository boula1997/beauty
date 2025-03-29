<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the admin is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $image=request()->isMethod('put')?'nullable':'required';
        // dd(request()->all());
        return [
            'image' => $image,
            'name' => 'required',
            'email' => ['required','email',Rule::unique('admins', 'email')->ignore($this->id)],
            'phone' => ['required','numeric',Rule::unique('admins', 'phone')->ignore($this->id)],
            'password' => 'required_without:_method|same:confirm-password|min:8|regex:/[@$!%*?&]/|regex:/[0-9]/|regex:/[A-Z]/|regex:/[a-z]/',
            'roles' => 'required'
        ];
    }
}