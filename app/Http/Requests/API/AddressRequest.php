<?php

namespace App\Http\Requests\API;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\JsonResponse;



class AddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
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
        return validationFailedResponse($validator->errors());
        throw new ValidationException($validator,$response);
    }


    
}