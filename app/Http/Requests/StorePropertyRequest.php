<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class StorePropertyRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'address' => 'required|string',
            'image' => 'required|mimes:png,jpg',
            'property_value' => 'required|numeric',
            'mortgage' => 'required|numeric',
            'tenancy_id' => 'required|exists:tenancies,id',
        ];
    }
}
