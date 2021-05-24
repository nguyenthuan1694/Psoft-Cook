<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name' => 'required|max:255',
            'slug' => 'required|unique:products,slug|max:255',
            'status' => 'required|numeric',
            'thumbnail' => 'nullable|image|max:1024',
            'images.*' => 'nullable|image|max:2048',
            'categories.*' => 'nullable|numeric',
            'date_available' => 'nullable|date_format:Y-m-d',
            'location' => 'required|unique:products,location|max:255',
            'total_area' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'date_of_delivery' => 'nullable|date_format:Y-m-d',
        ];
    }
}
