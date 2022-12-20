<?php
namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
class HositeterminalsEditRequest extends FormRequest
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
            
				"id" => "filled|numeric",
				"termno" => "nullable|numeric",
				"invno" => "nullable|numeric",
				"noninvno" => "nullable|numeric",
				"desc" => "nullable|string",
				"prnloc" => "nullable|string",
				"prnsn" => "nullable|string",
				"prnfeed" => "nullable|numeric",
				"autoprt" => "nullable|numeric",
				"cdrwcode" => "nullable|string",
				"mode" => "nullable|numeric",
				"roundfactor" => "nullable|numeric",
				"spacer" => "nullable|numeric",
				"cute" => "nullable|numeric",
				"sr" => "nullable|numeric",
				"shfcount" => "nullable|numeric",
				"vatdiv" => "nullable|numeric",
				"stationcode" => "nullable|numeric",
				"rinvno" => "nullable|numeric",
				"rnoninvno" => "nullable|numeric",
				"eod" => "nullable|numeric",
				"safedropno" => "nullable|numeric",
				"rsafedropno" => "nullable|numeric",
				"transno" => "nullable|numeric",
				"amutax" => "nullable|numeric",
				"bpnno" => "nullable|string",
				"minno" => "nullable|string",
				"terminal" => "nullable|string",
				"serialno" => "nullable|string",
				"outletid" => "nullable|numeric",
				"arno" => "nullable|numeric",
				"rarno" => "nullable|numeric",
				"zoneid" => "nullable|numeric",
				"divisionid" => "nullable|numeric",
				"posdrive" => "nullable|string",
				"datadrive" => "nullable|string",
				"outlettype" => "nullable|numeric",
				"warningsd" => "nullable|numeric",
				"alarmsd" => "nullable|numeric",
				"risccservername" => "nullable|string",
				"siteservername" => "nullable|string",
				"risscdb" => "nullable|string",
				"sitedb" => "nullable|string",
				"dbuserid" => "nullable|string",
				"dualdisplay" => "nullable|numeric",
				"displaytopx" => "nullable|numeric",
				"displaytopy" => "nullable|numeric",
				"listtopx" => "nullable|numeric",
				"listtopy" => "nullable|numeric",
				"listwidth" => "nullable|numeric",
				"listheight" => "nullable|numeric",
				"mediadirectory" => "nullable|string",
				"mediafilter" => "nullable|string",
				"mediaidle" => "nullable|numeric",
				"posidle" => "nullable|numeric",
				"secondprinter" => "nullable|string",
				"rct" => "nullable|string",
				"textfile" => "nullable",
				"csv" => "nullable|string",
				"flagfile" => "nullable",
				"cdrawloc" => "nullable|string",
				"admpos" => "nullable|numeric",
				"postypeno" => "nullable|numeric",
				"transtype" => "nullable|numeric",
				"hofolder" => "nullable|string",
				"vatoption" => "nullable|numeric",
				"centraldirectory" => "nullable|string",
				"centralprinter" => "nullable|string",
				"initialfund" => "nullable|numeric",
				"companyname" => "nullable|string",
				"maxscdiscount" => "nullable|numeric",
				"printwidth" => "nullable|numeric",
				"poreg" => "nullable|string",
				"tmpdir" => "nullable|string",
				"trdir" => "nullable|string",
				"escdir" => "nullable|string",
				"hfdir" => "nullable|string",
				"keycfgdir" => "nullable|string",
				"rcttext" => "nullable|string",
				"ordertext" => "nullable|string",
				"ejtext" => "nullable|string",
				"displaydat" => "nullable|string",
				"deffotype" => "nullable|numeric",
				"reod" => "nullable|numeric",
				"type" => "nullable|string",
				"isos" => "nullable|numeric",
				"status" => "nullable|numeric",
				"ekpos" => "nullable|numeric",
				"mealstubid" => "nullable|numeric",
				"tickettype" => "nullable|numeric",
				"ticketprinter" => "nullable|string",
				"mealstubtype" => "nullable|numeric",
				"spctickettype" => "nullable|numeric",
				"terminalcode" => "nullable|string",
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
