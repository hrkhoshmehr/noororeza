<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePhoneRequest extends FormRequest
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
            'phone' => 'required|numeric|digits:11|digits:11|unique:phones',
        ];
    }

    public function messages()
    {
        return [
            'phone.required' => 'شماره تلفن را وارد کنید.',
            'phone.numeric' => 'شماره تلفن باید عدد باشد.',
            'phone.digits:11' => 'شماره تلفن باید 11 رقم باشد.',
            'phone.unique' => 'شماره شما قبلا ثبت شده است.',
        ];
    }
}
