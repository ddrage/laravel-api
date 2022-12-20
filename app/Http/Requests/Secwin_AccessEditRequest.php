<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class Secwin_AccessEditRequest extends FormRequest
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
            
				"acc_guid" => "filled|string",
				"acc_sitelimiter" => "filled|string",
				"acc_application" => "filled|numeric",
				"acc_operator" => "filled|numeric",
				"acc_operatorsite" => "filled|string",
				"acc_hashnumber" => "filled|numeric",
				"acc_access" => "nullable|string",
				"acc_accesstime" => "nullable|numeric",
				"acc_extrafield" => "nullable|numeric",
				"acc_extrastring" => "nullable|string",
				"acc_crc" => "nullable|string",
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
