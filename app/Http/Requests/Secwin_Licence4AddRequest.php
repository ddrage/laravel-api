<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class Secwin_Licence4AddRequest extends FormRequest
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
            
				"lic_guid" => "required|string",
				"lic_sitelimiter" => "required|string",
				"lic_licencedto" => "required|string",
				"lic_dealer" => "nullable|string",
				"lic_product" => "required|string",
				"lic_copies" => "nullable|numeric",
				"lic_level" => "nullable|numeric",
				"lic_lastrundate" => "nullable|numeric",
				"lic_appnumber" => "nullable|numeric",
				"lic_serialnumber" => "nullable|string",
				"lic_modules" => "nullable|numeric",
				"lic_licencetype" => "required|numeric",
				"lic_other1" => "nullable|string",
				"lic_additionalstring1" => "nullable|string",
				"lic_additionalstring2" => "nullable|string",
				"lic_additionalstring3" => "nullable|string",
				"lic_additionallong1" => "nullable|numeric",
				"lic_additionallong2" => "nullable|numeric",
				"lic_expirydate" => "nullable|numeric",
				"lic_crclen" => "nullable|numeric",
				"lic_crc" => "nullable|string",
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
