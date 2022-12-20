<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class AcctprodAddRequest extends FormRequest
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
            
				"acctcode" => "required|numeric",
				"prodcode" => "required|numeric",
				"unitcode" => "required|numeric",
				"description" => "nullable|string",
				"partnum" => "nullable|string",
				"unitcost" => "nullable|numeric",
				"refdate" => "nullable|numeric",
				"currcost" => "nullable|numeric",
				"unitmeas" => "nullable|string",
				"unitprice" => "nullable|numeric",
				"pricedate" => "nullable|numeric",
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
