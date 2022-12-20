<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class StkcardEditRequest extends FormRequest
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
				"linenum" => "filled|numeric",
				"transcode" => "nullable|numeric",
				"codetype" => "nullable|string",
				"trandate" => "nullable|numeric",
				"yearno" => "nullable|numeric",
				"monthno" => "nullable|numeric",
				"prodcode" => "nullable|numeric",
				"catcode" => "nullable|numeric",
				"unitcode" => "nullable|numeric",
				"description" => "nullable|string",
				"thisfree" => "nullable|string",
				"partnum" => "nullable|string",
				"prodinstall" => "nullable|numeric",
				"serinstall" => "nullable|string",
				"descinstall" => "nullable|string",
				"acctcode" => "nullable|numeric",
				"areacode" => "nullable|numeric",
				"debitqty" => "nullable|numeric",
				"creditqty" => "nullable|numeric",
				"produnit" => "nullable|string",
				"prodcontents" => "nullable|numeric",
				"begbal" => "nullable|numeric",
				"debit" => "nullable|numeric",
				"credit" => "nullable|numeric",
				"runbal" => "nullable|numeric",
				"quantity" => "nullable|numeric",
				"oldbal" => "nullable|numeric",
				"unitcost" => "nullable|numeric",
				"smallcost" => "nullable|numeric",
				"avecost" => "nullable|numeric",
				"oldave" => "nullable|numeric",
				"currcost" => "nullable|numeric",
				"withserial" => "nullable|string",
				"withbarcode" => "nullable|string",
				"expqty" => "nullable|numeric",
				"currency" => "nullable|string",
				"ponum" => "nullable|numeric",
				"unitmeas" => "nullable|string",
				"purunit" => "nullable|string",
				"contents" => "nullable|numeric",
				"realcontents" => "nullable|numeric",
				"remarks" => "nullable|string",
				"procok" => "nullable|string",
				"retqty" => "nullable|numeric",
				"balance" => "nullable|numeric",
				"othertype" => "nullable|string",
				"othernum" => "nullable|numeric",
				"otheracctcode" => "nullable|numeric",
				"otherprodcode" => "nullable|numeric",
				"otherponum" => "nullable|numeric",
				"netprice" => "nullable|numeric",
				"unitprice" => "nullable|numeric",
				"ifnet" => "nullable|string",
				"ifvat" => "nullable|string",
				"iffree" => "nullable|string",
				"warecode" => "nullable|string",
				"warebeg" => "nullable|numeric",
				"warebal" => "nullable|numeric",
				"binnumber" => "nullable|string",
				"invoiceno" => "nullable|string",
				"posted" => "nullable|string",
				"innerunit" => "nullable|string",
				"innercont" => "nullable|numeric",
				"expiration" => "nullable|numeric",
				"division" => "nullable|string",
				"uom" => "nullable|string",
				"converted" => "nullable|numeric",
				"quantitym" => "nullable|numeric",
				"quantityp" => "nullable|numeric",
				"smallum" => "nullable|string",
				"amount" => "nullable|numeric",
				"saleprice" => "nullable|numeric",
				"saleum" => "nullable|string",
				"saleucode" => "nullable|numeric",
				"iscancel" => "nullable|numeric",
				"invresetdate" => "nullable|numeric",
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
