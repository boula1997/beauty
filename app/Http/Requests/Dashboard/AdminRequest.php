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
        $image = $this->isMethod('put') ? 'nullable' : 'required';

        $rules = [
            'image' => $image,
            'name' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('admins', 'email')->ignore($this->id),
            ],
            'phone' => [
                'required',
                'numeric',
                Rule::unique('admins', 'phone')->ignore($this->id),
            ],
            'roles' => 'required',
        ];

        if ($this->isMethod('post')) {
            // في الـ create → الباسورد مطلوب
            $rules['password'] = 'required|same:confirm-password|min:8'
                .'|regex:/[@$!%*?&]/'
                .'|regex:/[0-9]/'
                .'|regex:/[A-Z]/'
                .'|regex:/[a-z]/';
        } else {
            // في الـ update → الباسورد اختياري
            $rules['password'] = 'nullable|same:confirm-password|min:8'
                .'|regex:/[@$!%*?&]/'
                .'|regex:/[0-9]/'
                .'|regex:/[A-Z]/'
                .'|regex:/[a-z]/';
        }

        return $rules;
    }
    public function messages()
    {
        return [
            'image.required' => 'Profile image is required.',

            'name.required' => 'Name is required.',

            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email is already taken.',

            'phone.required' => 'Phone number is required.',
            'phone.numeric' => 'Phone number must contain only digits.',
            'phone.unique' => 'This phone number is already taken.',

            'roles.required' => 'Please select a role.',

            'password.required' => 'Password is required.',
            'password.same' => 'Password and confirmation do not match.',
            'password.min' => 'Password must be at least 8 characters long.',
            'password.regex' => 'Password must include at least one uppercase letter, one lowercase letter, one number, and one special character (@$!%*?&).',
        ];
    }

}
