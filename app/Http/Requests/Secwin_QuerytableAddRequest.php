<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class Secwin_QuerytableAddRequest extends FormRequest
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
            
				"field1" => "nullable|string",
				"field2" => "required|string",
				"field3" => "nullable|string",
				"field4" => "nullable|string",
				"field5" => "nullable|string",
				"field6" => "nullable|string",
				"field7" => "nullable|string",
				"field8" => "nullable|string",
				"field9" => "nullable|string",
				"field10" => "nullable|string",
				"field11" => "nullable|string",
				"field12" => "nullable|string",
				"field13" => "nullable|string",
				"field14" => "nullable|string",
				"field15" => "nullable|string",
				"field16" => "nullable|string",
				"field17" => "nullable|string",
				"field18" => "nullable|string",
				"field19" => "nullable|string",
				"field20" => "nullable|string",
				"field21" => "nullable|string",
				"field22" => "nullable|string",
				"field23" => "nullable|string",
				"field24" => "nullable|string",
				"field25" => "nullable|string",
				"field26" => "nullable|string",
				"field27" => "nullable|string",
				"field28" => "nullable|string",
				"field29" => "nullable|string",
				"field30" => "nullable|string",
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
