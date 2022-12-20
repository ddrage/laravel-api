<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class StkheaderEditRequest extends FormRequest
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
            
				"trantype" => "filled|string",
				"trannum" => "filled|numeric",
				"tranno" => "nullable|numeric",
				"transcode" => "nullable|numeric",
				"refdate" => "nullable|numeric",
				"acctcode" => "nullable|numeric",
				"acctname" => "nullable|string",
				"warefrom" => "nullable|string",
				"wareto" => "nullable|string",
				"chartcode" => "nullable|numeric",
				"refinv" => "nullable|string",
				"refdr" => "nullable|string",
				"refbol" => "nullable|string",
				"refpr" => "nullable|string",
				"amount" => "nullable|numeric",
				"returned" => "nullable|numeric",
				"balance" => "nullable|numeric",
				"posted" => "nullable|string",
				"apvnum" => "nullable|numeric",
				"scheduled" => "nullable|string",
				"remarks" => "nullable|string",
				"division" => "nullable|string",
				"encodedby" => "nullable|string",
				"ponum" => "nullable|numeric",
				"cmnumber" => "nullable|numeric",
				"invresetdate" => "nullable|numeric",
				"isinvreset" => "nullable|numeric",
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
