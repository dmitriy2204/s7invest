<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetailCreateRequest extends FormRequest
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
            //'user_id' => 'required',
            'name' => 'required|min:3',
            'supplier_num' => 'nullable|max:100|min:3',
            'producer_num' => 'nullable|max:100|min:3',
            'serial' => 'nullable|max:100|min:3',
            'supplier' => 'nullable|max:100',
            'producer' => 'nullable|max:100',
            'amount' => 'required',
            'type' => 'required',
            'min_amount' => 'required',
            'location_id' => 'nullable',
            'comment' => 'nullable',
            'source' => 'nullable'
        ];
    }
}
