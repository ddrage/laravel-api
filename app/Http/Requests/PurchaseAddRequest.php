<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class PurchaseAddRequest extends FormRequest
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
				"suppinvno" => "nullable|numeric",
				"refdate" => "nullable|numeric",
				"acctcode" => "nullable|numeric",
				"amount" => "nullable|numeric",
				"served" => "nullable|numeric",
				"balance" => "nullable|numeric",
				"remone" => "nullable|string",
				"remtwo" => "nullable|string",
				"remthree" => "nullable|string",
				"remfour" => "nullable|string",
				"remfive" => "nullable|string",
				"division" => "nullable|string",
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
