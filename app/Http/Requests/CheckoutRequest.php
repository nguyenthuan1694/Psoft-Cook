<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'fullname' => 'required',
            'email' => 'required|email',
            'house_number' => 'required|max:50',
            'ward_code' => 'required|numeric',
            'district_code' => 'required|numeric',
            'province_code' => 'required|numeric',
            'phone' => 'required|digits_between:10,12',
            'note' => 'max:255'
        ];
    }
}
