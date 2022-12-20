<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class AccountsEditRequest extends FormRequest
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
            
				"acctcode" => "filled|numeric",
				"acctname" => "nullable|string",
				"billto" => "nullable|string",
				"lastname" => "nullable|string",
				"firstname" => "nullable|string",
				"mi" => "nullable|string",
				"areacode" => "nullable|numeric",
				"accttype" => "nullable|string",
				"contact" => "nullable|string",
				"telnum" => "nullable|string",
				"purchase" => "nullable|numeric",
				"payment" => "nullable|numeric",
				"puradjdb" => "nullable|numeric",
				"puradjcr" => "nullable|numeric",
				"balance" => "nullable|numeric",
				"sales" => "nullable|numeric",
				"salepay" => "nullable|numeric",
				"saleadjdb" => "nullable|numeric",
				"saleadjcr" => "nullable|numeric",
				"salebal" => "nullable|numeric",
				"overpay" => "nullable|numeric",
				"orderamt" => "nullable|numeric",
				"uncleared" => "nullable|numeric",
				"creditlimit" => "nullable|numeric",
				"taxtype" => "nullable|numeric",
				"withvat" => "nullable|string",
				"terms" => "nullable|string",
				"discone" => "nullable|numeric",
				"disctwo" => "nullable|numeric",
				"discthree" => "nullable|numeric",
				"discfour" => "nullable|numeric",
				"baseacct" => "nullable|numeric",
				"ifbase" => "nullable|string",
				"creditstatus" => "nullable|string",
				"newcode" => "nullable|numeric",
				"newtype" => "nullable|string",
				"interest" => "nullable|numeric",
				"indays" => "nullable|numeric",
				"status" => "nullable|string",
				"address" => "nullable|string",
				"deliverycharge" => "nullable|numeric",
				"tin" => "nullable|string",
				"buscode" => "nullable|numeric",
				"faxnum" => "nullable|string",
				"distcode" => "nullable|numeric",
				"visit" => "nullable|numeric",
				"tradechan" => "nullable|string",
				"consumerchan" => "nullable|string",
				"subconsumerchan" => "nullable|string",
				"nielsenarea" => "nullable|string",
				"indirect" => "nullable|string",
				"custcode" => "nullable|string",
				"country" => "nullable|string",
				"city" => "nullable|string",
				"state" => "nullable|string",
				"zip" => "nullable|string",
				"kraftcustomer" => "nullable|string",
				"paddress" => "nullable|string",
				"pdistributor" => "nullable|string",
				"distributor" => "nullable|string",
				"location_type" => "nullable|string",
				"surcharge" => "nullable|numeric",
				"username" => "nullable|string",
				"token" => "nullable|string",
				"isinstitutional" => "nullable|string",
				"salesmancode" => "nullable|numeric",
				"salesmanname" => "nullable|string",
				"isewtax" => "nullable|numeric",
				"ewtaxrate" => "nullable|numeric",
				"accountsgroup" => "nullable|numeric",
				"isbwtax" => "nullable|numeric",
				"bwtaxrate" => "nullable|numeric",
				"businessstyle" => "nullable|string",
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
