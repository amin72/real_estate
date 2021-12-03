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
            'title' => 'required|max:30',
            'address' => 'required|max:200',
            'price' => 'required|integer',
            'price_monthly' => 'required|integer',
            'bedrooms' => 'required|integer',
            'has_store' => 'required|boolean',
            'has_garage' => 'required|boolean',
            'area' => 'required|integer',
            'phone' => 'required|regex:/09[0-9]{9}/',
            'image' => 'required_unless:requested,on',
        ];
    }
}
