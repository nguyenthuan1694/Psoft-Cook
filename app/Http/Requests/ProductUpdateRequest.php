<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'slug' => 'required|unique:products,slug,' . $this->id . '|max:255',
            'status' => 'required|numeric',
            'thumbnail' => 'nullable|image|max:1024',
            'categories.*' => 'nullable|numeric',
            'date_available' => 'nullable|date_format:Y-m-d',
            'location' => 'nullable|string',
            'total_area' => 'nullable|string',
            'type' => 'nullable|string',
            'date_of_delivery' => 'nullable|date_format:Y-m-d',
        ];
    }
}
