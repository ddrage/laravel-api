<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class SordetEditRequest extends FormRequest
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
            
				"trantype" => "nullable|string",
				"trannum" => "nullable|numeric",
				"referenceno" => "nullable|numeric",
				"ordnum" => "filled|numeric",
				"linenum" => "filled|numeric",
				"refdate" => "nullable|numeric",
				"prodcode" => "nullable|numeric",
				"partnum" => "nullable|string",
				"catcode" => "nullable|numeric",
				"unitcode" => "nullable|numeric",
				"thisfree" => "nullable|string",
				"description" => "nullable|string",
				"barcode" => "nullable|string",
				"prodtype" => "nullable|string",
				"unitmeas" => "nullable|string",
				"contents" => "nullable|numeric",
				"batchcode" => "nullable|numeric",
				"invnum" => "nullable|numeric",
				"ordqty" => "nullable|numeric",
				"resqty" => "nullable|numeric",
				"svdqty" => "nullable|numeric",
				"qtypick" => "nullable|numeric",
				"unitcost" => "nullable|numeric",
				"unitprice" => "nullable|numeric",
				"netprice" => "nullable|numeric",
				"acctcode" => "nullable|numeric",
				"ifnet" => "nullable|string",
				"iffree" => "nullable|string",
				"totalcost" => "nullable|numeric",
				"regisno" => "nullable|string",
				"discone" => "nullable|numeric",
				"discount" => "nullable|numeric",
				"discamt" => "nullable|numeric",
				"dischead" => "nullable|numeric",
				"finishdate" => "nullable|numeric",
				"finishtime" => "nullable|numeric",
				"status" => "nullable|string",
				"warecode" => "nullable|string",
				"binnumber" => "nullable|string",
				"servedqty" => "nullable|numeric",
				"servedamt" => "nullable|numeric",
				"remarks" => "nullable|string",
				"retqty" => "nullable|numeric",
				"balqty" => "nullable|numeric",
				"areacode" => "nullable|numeric",
				"suppcode" => "nullable|numeric",
				"recqty" => "nullable|numeric",
				"recbalance" => "nullable|numeric",
				"yearno" => "nullable|numeric",
				"monthno" => "nullable|numeric",
				"personcode" => "nullable|numeric",
				"division" => "nullable|string",
				"originalprice" => "nullable|numeric",
				"taxtype" => "nullable|numeric",
				"ifvat" => "nullable|numeric",
				"vatamount" => "nullable|numeric",
				"vatableamt" => "nullable|numeric",
				"vatexemptamt" => "nullable|numeric",
				"zeroratedamt" => "nullable|numeric",
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
