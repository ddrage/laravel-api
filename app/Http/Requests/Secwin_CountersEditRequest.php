<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class Secwin_CountersEditRequest extends FormRequest
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
            
				"cou_guid" => "filled|string",
				"cou_sitelimiter" => "nullable|string",
				"cou_licenceguid" => "filled|string",
				"cou_minlevel" => "nullable|numeric",
				"cou_maxlevel" => "nullable|string",
				"cou_counterdescription" => "filled|string",
				"cou_limit" => "nullable|numeric",
				"cou_extralong" => "nullable|numeric",
				"cou_extrastring" => "nullable|string",
				"cou_crc" => "nullable|string",
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
