<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class BranchesEditRequest extends FormRequest
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
            
				"branchid" => "filled|numeric",
				"zoneno" => "filled|numeric",
				"datadrive" => "nullable|string",
				"backupdrive" => "filled|string",
				"updatedrive" => "filled|date",
				"type" => "filled|string",
				"branchname" => "nullable|string",
				"currentoperatorcode" => "filled|numeric",
				"operatorname" => "filled|string",
				"branchaddress" => "filled|string",
				"businessphone" => "filled|string",
				"emailaddress" => "filled|email",
				"telephone" => "filled|string",
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
