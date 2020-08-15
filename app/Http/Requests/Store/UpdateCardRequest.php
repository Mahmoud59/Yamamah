<?php

namespace App\Http\Requests\Store;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;

class UpdateCardRequest extends FormRequest
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
				'id' => 'required|exists:cards',
				'company' => 'required|in:'.implode(',', config('enums.companies')),
				'card_type_id' => 'required|exists:card_types,id',
				'provider' => 'required|in:'.implode(',', config('enums.providers')),
				'serial_number' => [
									'required',
									'numeric',
									'digits_between:12,16',
									'different:secret_code',
									'different:operation_provider_id',
									Rule::unique('cards')->ignore(request()->id),
									],
				'secret_code' => [
									'required',
									'numeric',
									'digits_between:12,16',
									'different:serial_number',
									'different:operation_provider_id',
									Rule::unique('cards')->ignore(request()->id),
									],
				'operation_provider_id' => [
									'required',
									'numeric',
									'digits_between:5,20',
									'different:secret_code',
									'different:serial_number',
									Rule::unique('cards')->ignore(request()->id),
									],
			];
    }
}