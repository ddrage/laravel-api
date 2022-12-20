<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class InvdetAddRequest extends FormRequest
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
            
				"invdetno" => "required|numeric",
				"invtype" => "required|string",
				"regisno" => "nullable|string",
				"invnum" => "nullable|string",
				"ordnum" => "required|numeric",
				"ordnumunit" => "required|numeric",
				"acctcode" => "nullable|numeric",
				"refdate" => "nullable|numeric",
				"prodcode" => "nullable|numeric",
				"partnum" => "nullable|string",
				"unitcode" => "nullable|numeric",
				"description" => "nullable|string",
				"barcode" => "nullable|string",
				"unitmeas" => "nullable|string",
				"contents" => "nullable|numeric",
				"qty" => "nullable|numeric",
				"netprice" => "nullable|numeric",
				"unitprice" => "nullable|numeric",
				"totalamt" => "nullable|numeric",
				"netamount" => "nullable|numeric",
				"iffree" => "nullable|string",
				"ifnet" => "nullable|string",
				"discone" => "nullable|numeric",
				"discount" => "nullable|numeric",
				"warecode" => "nullable|string",
				"binnumber" => "nullable|string",
				"ifadj" => "nullable|string",
				"ifexport" => "nullable|string",
				"suppcode" => "nullable|numeric",
				"catcode" => "nullable|numeric",
				"personcode" => "nullable|numeric",
				"yearno" => "nullable|numeric",
				"monthno" => "nullable|numeric",
				"areacode" => "nullable|numeric",
				"invoicetype" => "nullable|string",
				"division" => "nullable|string",
				"originalprice" => "nullable|numeric",
				"taxtype" => "nullable|numeric",
				"ifvat" => "nullable|numeric",
				"vatamount" => "nullable|numeric",
				"vatableamt" => "nullable|numeric",
				"vatexemptamt" => "nullable|numeric",
				"zeroratedamt" => "nullable|numeric",
				"iscancel" => "nullable|numeric",
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
