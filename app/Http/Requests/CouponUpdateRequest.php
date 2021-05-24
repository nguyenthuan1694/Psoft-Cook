<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponUpdateRequest extends FormRequest
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
            'code' => 'required|unique:coupons,code,' . $this->id . '|max:20',
            'type' => 'required|in:' . implode(',', config('common.coupon.type')),
            'value' => 'required|numeric',
            'status' => 'required|in:' . implode(',', config('common.coupon.status')),
        ];
    }
}
