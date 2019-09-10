<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name'=> 'required|string',
            'country'=> 'required|string',
            'city'=> 'required|string',
            'street'=> 'required|string',
            'number'=> 'required',
            'post'=> 'required',
            'company_type_id'=> 'required',
            'currency_id'=> 'required',
            'user_id'=> 'required',



        ];
    }
}
