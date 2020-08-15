<?php

namespace App\Http\Requests\Store;

use Illuminate\Foundation\Http\FormRequest;

class StoreCardTypeRequest extends FormRequest
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
				'company' => 'required|in:'.implode(',', config('enums.companies')),
				'name' => 'required',
				'value' => 'required|regex:/^\d+(\.\d{1,2})?$/',
			];
    }
}