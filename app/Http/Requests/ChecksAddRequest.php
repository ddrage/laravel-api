<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class ChecksAddRequest extends FormRequest
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
            
				"glhid" => "required|numeric",
				"checknumber" => "required|string",
				"bankid" => "nullable|numeric",
				"bank" => "nullable|string",
				"accountno" => "nullable|string",
				"checkdate" => "nullable|date",
				"cleardate" => "nullable|date",
				"voucherno" => "nullable|numeric",
				"status" => "nullable|string",
				"checkstatus" => "nullable|string",
				"amount" => "nullable|numeric",
				"suppcode" => "nullable|string",
				"date" => "nullable|date",
				"particulars" => "nullable|string",
				"ispayeesacct" => "nullable|string",
				"checkno" => "nullable|numeric",
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
