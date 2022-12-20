<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class MopAddRequest extends FormRequest
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
            
				"id" => "required|numeric",
				"desc" => "required|string",
				"pricelevel" => "nullable|numeric",
				"partialtender" => "nullable|numeric",
				"change" => "nullable|numeric",
				"cashdraw" => "nullable|numeric",
				"tender" => "nullable|numeric",
				"refno" => "nullable|numeric",
				"gcvalue" => "nullable|numeric",
				"currencyid" => "nullable|numeric",
				"mopcatid" => "nullable|numeric",
				"isloyalty" => "nullable|numeric",
				"displayunused" => "nullable|numeric",
				"selectoutlets" => "nullable|numeric",
				"uploaded" => "nullable|numeric",
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
