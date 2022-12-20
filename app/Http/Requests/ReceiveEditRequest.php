<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class ReceiveEditRequest extends FormRequest
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
				"transcode" => "nullable|numeric",
				"warecode" => "nullable|string",
				"wareto" => "nullable|string",
				"refdate" => "nullable|numeric",
				"acctcode" => "nullable|numeric",
				"terms" => "nullable|numeric",
				"duedate" => "nullable|numeric",
				"refdr" => "nullable|string",
				"etw" => "nullable|string",
				"refinv" => "nullable|string",
				"amount" => "nullable|numeric",
				"apvtype" => "nullable|string",
				"apvnum" => "nullable|numeric",
				"posted" => "nullable|string",
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
