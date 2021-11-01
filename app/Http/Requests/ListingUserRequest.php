<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListingUserRequest extends FormRequest
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
            'title' => 'required|max:100',
            'address' => 'required|max:200',
            'city' => 'required|max:100',
            'zipcode' => 'required|max:20',
            'price' => 'required',
            'bedrooms' => 'required',
            'bedrooms' => 'required',
            'has_store' => 'required',
            'has_garage' => 'required',
            'area' => 'required',
            'image' => 'required',
        ];
    }
}
