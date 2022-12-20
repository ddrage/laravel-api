<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class GlheaderAddRequest extends FormRequest
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
				"books" => "nullable|string",
				"gltype" => "nullable|string",
				"empno" => "nullable|numeric",
				"shift" => "nullable|string",
				"posno" => "nullable|numeric",
				"turnoverid" => "nullable|numeric",
				"refnum" => "nullable|numeric",
				"refdate" => "nullable|numeric",
				"date" => "nullable|date",
				"apv_number" => "nullable|numeric",
				"srrnumber" => "nullable|numeric",
				"transactiontype" => "nullable|string",
				"invoiceno" => "nullable|string",
				"orderno" => "nullable|string",
				"suppcode" => "nullable|numeric",
				"payee" => "nullable|string",
				"payeetype" => "nullable|string",
				"bankname" => "nullable|string",
				"bankaccount" => "nullable|string",
				"cleardate" => "nullable|numeric",
				"check_no" => "nullable|string",
				"checkdate" => "nullable|numeric",
				"amount" => "nullable|numeric",
				"checkamount" => "nullable|numeric",
				"balance" => "nullable|numeric",
				"paid" => "nullable|numeric",
				"debits" => "nullable|numeric",
				"credits" => "nullable|numeric",
				"cancelled" => "nullable|numeric",
				"disbursed" => "nullable|numeric",
				"posted" => "nullable|string",
				"checkissued" => "nullable|numeric",
				"explain" => "nullable|string",
				"checkpayment" => "nullable|numeric",
				"invoiceselect" => "nullable|numeric",
				"locked" => "nullable|numeric",
				"branchcode" => "nullable|numeric",
				"deptcode" => "nullable|numeric",
				"refnumsub" => "nullable|string",
				"monthseries" => "nullable|numeric",
				"yearseries" => "nullable|numeric",
				"reference" => "nullable|string",
				"month" => "nullable|numeric",
				"year" => "nullable|numeric",
				"brno" => "nullable|numeric",
				"agentcode" => "nullable|numeric",
				"customerno" => "nullable|numeric",
				"preparedby" => "nullable|string",
				"checkedby" => "nullable|string",
				"approvedby" => "nullable|string",
				"casno" => "nullable|string",
				"rfpno" => "nullable|string",
				"rbsno" => "nullable|string",
				"lqfno" => "nullable|string",
				"serfno" => "nullable|string",
				"status" => "nullable|string",
				"bankid" => "nullable|numeric",
				"hqbranchdaysalesid" => "nullable|numeric",
				"ap_amount" => "nullable|numeric",
				"ca_amount" => "nullable|numeric",
				"ap_ca" => "nullable|string",
				"counterno" => "nullable|numeric",
				"authorizedby" => "nullable|string",
				"ispayeesacct" => "nullable|string",
				"counterdate" => "nullable|numeric",
				"division" => "nullable|string",
				"collectorid" => "nullable|numeric",
				"ewtax" => "nullable|numeric",
				"bwtax" => "nullable|numeric",
				"wtax" => "nullable|numeric",
				"vatablesales" => "nullable|numeric",
				"vatamount" => "nullable|numeric",
				"vatexempt" => "nullable|numeric",
				"zerorated" => "nullable|numeric",
				"scpwddiscount" => "nullable|numeric",
				"netdue" => "nullable|numeric",
				"netamount" => "nullable|numeric",
				"taxbase" => "nullable|numeric",
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
