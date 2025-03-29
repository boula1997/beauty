<?php

namespace App\Http\Requests\API;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\JsonResponse;


class OrderRequest extends FormRequest
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
            'name' => 'string|required',
            'phone' => 'required',
            'email' => 'email|required',
            'address_id' => 'required|exists:addresses,id',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        return validationFailedResponse($validator->errors());
        throw new ValidationException($validator,$response);
    }
}