<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class Secwin_Operators5AddRequest extends FormRequest
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
            
				"ope5_guid" => "required|string",
				"ope5_sitelimiter" => "required|string",
				"ope5_login" => "required|string",
				"ope5_firstname" => "nullable|string",
				"ope5_surname" => "nullable|string",
				"ope5_password" => "nullable|same:confirm_password",
				"ope5_number" => "nullable|numeric",
				"ope5_usergroup" => "nullable|numeric",
				"ope5_lastpasswordchangedate" => "nullable|numeric",
				"ope5_hook1" => "nullable|numeric",
				"ope5_hook2" => "nullable|string",
				"ope5_emailaddress" => "nullable|email",
				"ope5_fingerprint1" => "nullable|string",
				"ope5_fingerprint2" => "nullable|string",
				"ope5_sitelow" => "nullable|string",
				"ope5_sitehi" => "nullable|string",
				"ope5_extralong" => "nullable|numeric",
				"ope5_extrastring" => "nullable|string",
				"ope5_usetemppwd" => "nullable|numeric",
				"ope5_questions" => "nullable|string",
				"ope5_reservedstring1" => "nullable|string",
				"ope5_reservedstring2" => "nullable|string",
				"ope5_reservedlong1" => "nullable|numeric",
				"ope5_reservedlong2" => "nullable|numeric",
				"ope5_crc" => "nullable|string",
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
