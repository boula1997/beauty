<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class AddressRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'        => 'sometimes|required|string|max:255',
            'fullName'     => 'sometimes|required|string|max:255',
            'phone'        => 'sometimes|required|string|regex:/^(\+\d{1,3})?\d{9,15}$/',
            'fullAddress'  => 'sometimes|required|string',
            'city'         => 'sometimes|required|string|max:255',
            'country'      => 'sometimes|required|string|max:255',
            'latitude'     => 'sometimes|required|numeric|between:-90,90',
            'longitude'    => 'sometimes|required|numeric|between:-180,180',
        ];

    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            redirect()->route('show_profile', ['#address-tab-pane'])
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'هناك خطأ في البيانات المدخلة، يرجى التحقق.')
        );
    }

}
