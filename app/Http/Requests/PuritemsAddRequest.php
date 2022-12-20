<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class PuritemsAddRequest extends FormRequest
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
            
				"ponum" => "required|numeric",
				"acctcode" => "nullable|numeric",
				"prodcode" => "required|numeric",
				"description" => "nullable|string",
				"trandate" => "nullable|numeric",
				"partnum" => "nullable|string",
				"quantity" => "nullable|numeric",
				"unitmeas" => "nullable|string",
				"contents" => "nullable|numeric",
				"unitcost" => "nullable|numeric",
				"svdqty" => "nullable|numeric",
				"balance" => "nullable|numeric",
				"currcost" => "nullable|numeric",
				"currency" => "nullable|string",
				"unitcode" => "nullable|numeric",
				"innerunit" => "nullable|string",
				"innercont" => "nullable|numeric",
				"division" => "nullable|string",
				"uom" => "nullable|string",
				"pouom" => "nullable|string",
				"amount" => "nullable|numeric",
        ];
    }

	public function messages()
    {
        return [
            //using laravel default validation messages
        ];
    }

	/**
     * If validator fails return the exception in json form
     * @param Validator $validator
     * @return array
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
