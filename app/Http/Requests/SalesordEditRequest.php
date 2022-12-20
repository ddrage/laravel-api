<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class SalesordEditRequest extends FormRequest
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
            
				"ordnum" => "filled|numeric",
				"refdate" => "nullable|numeric",
				"finishdate" => "nullable|numeric",
				"acctcode" => "nullable|numeric",
				"acctname" => "nullable|string",
				"areacode" => "nullable|numeric",
				"warecode" => "nullable|string",
				"empcode" => "nullable|numeric",
				"empname" => "nullable|string",
				"personcode" => "nullable|numeric",
				"personname" => "nullable|string",
				"refordnum" => "nullable|string",
				"terms" => "nullable|string",
				"addpercent" => "nullable|numeric",
				"discone" => "nullable|numeric",
				"disctwo" => "nullable|numeric",
				"grossnet" => "nullable|numeric",
				"grossdisc" => "nullable|numeric",
				"discount" => "nullable|numeric",
				"netamount" => "nullable|numeric",
				"svdamount" => "nullable|numeric",
				"status" => "nullable|string",
				"remarks" => "nullable|string",
				"unitordnum" => "nullable|numeric",
				"deliverycharge" => "nullable|numeric",
				"mop_id" => "nullable|numeric",
				"deliverydate" => "nullable|numeric",
				"saletype" => "nullable|string",
				"invoicetype" => "nullable|string",
				"withdr" => "nullable|numeric",
				"division" => "nullable|string",
				"taxtype" => "nullable|numeric",
				"ponumber" => "nullable|string",
				"accountsgroup" => "nullable|numeric",
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
