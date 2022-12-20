<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class BreakdwnEditRequest extends FormRequest
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
            
				"glhid" => "filled|numeric",
				"refnum" => "nullable|numeric",
				"refdate" => "nullable|numeric",
				"acctcode" => "nullable|numeric",
				"invoicedate" => "nullable|numeric",
				"trannum" => "filled|numeric",
				"invoice" => "nullable|string",
				"drnum" => "nullable|string",
				"ornum" => "nullable|string",
				"amount" => "nullable|numeric",
				"amtpaid" => "nullable|numeric",
				"balance" => "nullable|numeric",
				"transtype" => "nullable|string",
				"division" => "nullable|string",
				"invoicetype" => "nullable|string",
				"check" => "nullable|string",
				"gltype" => "nullable|string",
				"branch" => "nullable|numeric",
				"ptrannum" => "nullable|numeric",
				"ordnum" => "nullable|numeric",
				"ordnumunit" => "nullable|numeric",
				"ptype" => "nullable|string",
				"txtype" => "nullable|string",
				"taxtype" => "nullable|numeric",
				"vatablesales" => "nullable|numeric",
				"vatexempt" => "nullable|numeric",
				"zerorated" => "nullable|numeric",
				"vatamount" => "nullable|numeric",
				"withewtax" => "nullable|numeric",
				"withbwtax" => "nullable|numeric",
				"taxdue" => "nullable|numeric",
				"taxbase" => "nullable|numeric",
				"discount" => "nullable|numeric",
				"netdue" => "nullable|numeric",
				"grossamt" => "nullable|numeric",
				"netamount" => "nullable|numeric",
				"taxpaid" => "nullable|numeric",
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
