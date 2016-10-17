<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class StoreTenancyRequest extends Request
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
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'monthly_rent' => 'required|numeric',
            'tenants' => 'required|array|min:1',
        ];
    }
}
