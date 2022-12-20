<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class BranchesAddRequest extends FormRequest
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
            
				"branchid" => "required|numeric",
				"zoneno" => "required|numeric",
				"datadrive" => "nullable|string",
				"backupdrive" => "required|string",
				"updatedrive" => "required|date",
				"type" => "required|string",
				"branchname" => "nullable|string",
				"currentoperatorcode" => "required|numeric",
				"operatorname" => "required|string",
				"branchaddress" => "required|string",
				"businessphone" => "required|string",
				"emailaddress" => "required|email",
				"telephone" => "required|string",
				"cellular" => "nullable|string",
				"branchcode" => "nullable|string",
				"plantcode" => "nullable|string",
				"costcentercode" => "nullable|string",
				"poremarks1" => "nullable|string",
				"poremarks2" => "nullable|string",
				"poremarks3" => "nullable|string",
				"poremarks4" => "nullable|string",
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
