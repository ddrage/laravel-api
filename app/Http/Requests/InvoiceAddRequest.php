<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class InvoiceAddRequest extends FormRequest
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
            
				"regisno" => "nullable|string",
				"invtype" => "required|string",
				"invnum" => "nullable|string",
				"referenceno" => "nullable|numeric",
				"transcode" => "nullable|numeric",
				"refinvno" => "nullable|numeric",
				"refdate" => "nullable|numeric",
				"duedate" => "nullable|numeric",
				"trantype" => "nullable|string",
				"trannum" => "nullable|numeric",
				"ordnum" => "required|numeric",
				"ordnumunit" => "required|numeric",
				"refordnum" => "nullable|string",
				"cashier" => "nullable|string",
				"shiftno" => "nullable|numeric",
				"empcode" => "nullable|numeric",
				"empname" => "nullable|string",
				"personcode" => "nullable|numeric",
				"peronname" => "nullable|string",
				"custcode" => "nullable|numeric",
				"custname" => "nullable|string",
				"areacode" => "nullable|numeric",
				"acctcode" => "nullable|numeric",
				"acctname" => "nullable|string",
				"baseacct" => "nullable|numeric",
				"chartcode" => "nullable|numeric",
				"gross" => "nullable|numeric",
				"grossamt" => "nullable|numeric",
				"netamount" => "nullable|numeric",
				"discamount" => "nullable|numeric",
				"amount" => "nullable|numeric",
				"totalcost" => "nullable|numeric",
				"grossorder" => "nullable|numeric",
				"netorder" => "nullable|numeric",
				"vatorder" => "nullable|numeric",
				"discorder" => "nullable|numeric",
				"orderamt" => "nullable|numeric",
				"ordercost" => "nullable|numeric",
				"payment" => "nullable|numeric",
				"balance" => "nullable|numeric",
				"addpercent" => "nullable|numeric",
				"discone" => "nullable|numeric",
				"disctwo" => "nullable|numeric",
				"discthree" => "nullable|numeric",
				"discfour" => "nullable|numeric",
				"terms" => "nullable|string",
				"withvat" => "nullable|string",
				"vatamt" => "nullable|numeric",
				"discountrate" => "nullable|numeric",
				"discount" => "nullable|numeric",
				"gltype" => "nullable|string",
				"refnum" => "nullable|numeric",
				"ifvoid" => "nullable|string",
				"ifreserved" => "nullable|numeric",
				"finishdate" => "nullable|numeric",
				"posbalance" => "nullable|numeric",
				"checks" => "nullable|numeric",
				"nochecks" => "nullable|numeric",
				"giftcheck" => "nullable|numeric",
				"card" => "nullable|numeric",
				"cash" => "nullable|numeric",
				"nonmonetary" => "nullable|numeric",
				"credit" => "nullable|numeric",
				"changeamt" => "nullable|numeric",
				"payaccepted" => "nullable|string",
				"cashsale" => "nullable|numeric",
				"packnum" => "nullable|numeric",
				"released" => "nullable|string",
				"invserved" => "nullable|string",
				"forrelease" => "nullable|string",
				"invwith" => "nullable|string",
				"refdr" => "nullable|string",
				"store" => "nullable|numeric",
				"bodega" => "nullable|numeric",
				"warecode" => "nullable|string",
				"forpickup" => "nullable|string",
				"approved" => "nullable|string",
				"remarks" => "nullable|string",
				"deliverycharge" => "nullable|numeric",
				"rrnum" => "nullable|numeric",
				"rrtran" => "nullable|numeric",
				"invname" => "nullable|string",
				"netofvat" => "nullable|numeric",
				"scdiscount" => "nullable|numeric",
				"amountdue" => "nullable|numeric",
				"addvat" => "nullable|numeric",
				"tamountdue" => "nullable|numeric",
				"vatable" => "nullable|numeric",
				"vatex" => "nullable|numeric",
				"zerorated" => "nullable|numeric",
				"invoicetype" => "nullable|string",
				"salestype" => "nullable|string",
				"withdr" => "nullable|numeric",
				"status" => "nullable|string",
				"division" => "nullable|string",
				"taxtype" => "nullable|numeric",
				"transtype" => "nullable|string",
				"checkno" => "nullable|string",
				"checkdate" => "nullable|numeric",
				"checkbank" => "nullable|string",
				"runningbalance" => "nullable|numeric",
				"glhid" => "nullable|numeric",
				"paytype" => "nullable|string",
				"transactionno" => "nullable|string",
				"transactiondate" => "nullable|numeric",
				"ponumber" => "nullable|string",
				"statementno" => "nullable|numeric",
				"statementfrom" => "nullable|numeric",
				"statementto" => "nullable|numeric",
				"speriod" => "nullable|numeric",
				"datepaid" => "nullable|numeric",
				"datepaid2" => "nullable|numeric",
				"datepaid3" => "nullable|numeric",
				"ewtax" => "nullable|numeric",
				"netofewtax" => "nullable|numeric",
				"cmnumber" => "nullable|numeric",
				"iscancel" => "nullable|numeric",
				"accountsgroup" => "nullable|numeric",
				"bwtax" => "nullable|numeric",
				"txtype" => "nullable|string",
				"withewtax" => "nullable|numeric",
				"withbwtax" => "nullable|numeric",
				"assignment" => "nullable|string",
				"localcurrency" => "nullable|string",
				"doccurrency" => "nullable|string",
				"shipmentno" => "nullable|string",
				"particulars" => "nullable|string",
				"taxdue" => "nullable|numeric",
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
