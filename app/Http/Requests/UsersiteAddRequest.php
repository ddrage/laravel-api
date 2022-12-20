<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class UsersiteAddRequest extends FormRequest
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
				"name" => "nullable|string",
				"pw" => "nullable|string",
				"auth_storeopen" => "nullable|numeric",
				"auth_void" => "nullable|numeric",
				"auth_refund" => "nullable|numeric",
				"auth_suspend" => "nullable|numeric",
				"auth_disc" => "nullable|numeric",
				"auth_draw" => "nullable|numeric",
				"auth_report" => "nullable|numeric",
				"auth_prcovr" => "nullable|numeric",
				"auth_safedrop" => "nullable|numeric",
				"auth_cashout" => "nullable|numeric",
				"auth_cashin" => "nullable|numeric",
				"auth_closeshf" => "nullable|numeric",
				"auth_closeday" => "nullable|numeric",
				"auth_shfrep" => "nullable|numeric",
				"auth_dayrep" => "nullable|numeric",
				"auth_closerep" => "nullable|numeric",
				"auth_xread" => "nullable|numeric",
				"auth_cum" => "nullable|numeric",
				"authcomt" => "nullable|numeric",
				"keyprof" => "nullable|numeric",
				"authacctreload" => "nullable|numeric",
				"authacctrefund" => "nullable|numeric",
				"authpayparking" => "nullable|numeric",
				"number" => "nullable|numeric",
				"token" => "nullable|string",
				"auth_audit" => "nullable|numeric",
				"auth_ekxread" => "nullable|numeric",
				"level" => "nullable|numeric",
				"auth_reprint" => "nullable|numeric",
				"auth_yread" => "nullable|numeric",
				"ambulant_outlet_id" => "nullable|numeric",
				"ambulant_device_no" => "nullable|numeric",
				"auth_reprintticket" => "nullable|numeric",
				"auditwindow" => "nullable|numeric",
				"mealstubquery" => "nullable|numeric",
				"claimstubquery" => "nullable|numeric",
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
