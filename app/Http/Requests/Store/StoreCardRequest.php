<?php

namespace App\Http\Requests\Store;

use Illuminate\Foundation\Http\FormRequest;

class StoreCardRequest extends FormRequest
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
				'card_type_id' => 'required|exists:card_types,id',
				'provider' => 'required|in:'.implode(',', config('enums.providers')),
				'serial_number' => 'required|numeric|unique:cards|different:secret_code|different:operation_provider_id|digits_between:12,16',
				'secret_code' => 'required|numeric|unique:cards|different:serial_number|different:operation_provider_id|digits_between:12,16',
				'operation_provider_id' => 'required|numeric|unique:cards|different:serial_number|different:secret_code|digits_between:5,20', 
			];
    }
}
