<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class InvtaxesEditRequest extends FormRequest
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
            
				"invtype" => "filled|string",
				"ordnum" => "filled|numeric",
				"ordnumunit" => "filled|numeric",
				"trannum" => "filled|numeric",
				"acctcode" => "nullable|numeric",
				"taxid" => "filled|numeric",
				"rate" => "nullable|numeric",
				"taxbase" => "nullable|numeric",
				"taxamount" => "nullable|numeric",
				"claimed" => "nullable|numeric",
				"glhid" => "nullable|numeric",
				"taxpaid" => "nullable|numeric",
				"taxbalance" => "nullable|numeric",
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
