<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class CstpriceEditRequest extends FormRequest
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
				"prodcode" => "filled|numeric",
				"unitcode" => "filled|numeric",
				"description" => "nullable|string",
				"refdate" => "nullable|numeric",
				"baseprice" => "nullable|numeric",
				"markup" => "nullable|numeric",
				"bymarkup" => "nullable|string",
				"markupper" => "nullable|numeric",
				"unitprice" => "nullable|numeric",
				"unitmeas" => "nullable|string",
				"contents" => "nullable|numeric",
				"barcode" => "nullable|string",
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
