<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Secwin_Access extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.secwin_access';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'acc_guid';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["acc_guid","acc_sitelimiter","acc_application","acc_operator","acc_operatorsite","acc_hashnumber","acc_access","acc_accesstime","acc_extrafield","acc_extrastring","acc_crc"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"ACC_GUID AS acc_guid", 
			"ACC_SITELIMITER AS acc_sitelimiter", 
			"ACC_APPLICATION AS acc_application", 
			"ACC_OPERATOR AS acc_operator", 
			"ACC_OPERATORSITE AS acc_operatorsite", 
			"ACC_HASHNUMBER AS acc_hashnumber", 
			"ACC_ACCESS AS acc_access", 
			"ACC_ACCESSTIME AS acc_accesstime", 
			"ACC_EXTRAFIELD AS acc_extrafield", 
			"ACC_EXTRASTRING AS acc_extrastring", 
			"ACC_CRC AS acc_crc" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ACC_GUID AS acc_guid", 
			"ACC_SITELIMITER AS acc_sitelimiter", 
			"ACC_APPLICATION AS acc_application", 
			"ACC_OPERATOR AS acc_operator", 
			"ACC_OPERATORSITE AS acc_operatorsite", 
			"ACC_HASHNUMBER AS acc_hashnumber", 
			"ACC_ACCESS AS acc_access", 
			"ACC_ACCESSTIME AS acc_accesstime", 
			"ACC_EXTRAFIELD AS acc_extrafield", 
			"ACC_EXTRASTRING AS acc_extrastring", 
			"ACC_CRC AS acc_crc" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ACC_GUID AS acc_guid", 
			"ACC_SITELIMITER AS acc_sitelimiter", 
			"ACC_APPLICATION AS acc_application", 
			"ACC_OPERATOR AS acc_operator", 
			"ACC_OPERATORSITE AS acc_operatorsite", 
			"ACC_HASHNUMBER AS acc_hashnumber", 
			"ACC_ACCESS AS acc_access", 
			"ACC_ACCESSTIME AS acc_accesstime", 
			"ACC_EXTRAFIELD AS acc_extrafield", 
			"ACC_EXTRASTRING AS acc_extrastring", 
			"ACC_CRC AS acc_crc" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ACC_GUID AS acc_guid", 
			"ACC_SITELIMITER AS acc_sitelimiter", 
			"ACC_APPLICATION AS acc_application", 
			"ACC_OPERATOR AS acc_operator", 
			"ACC_OPERATORSITE AS acc_operatorsite", 
			"ACC_HASHNUMBER AS acc_hashnumber", 
			"ACC_ACCESS AS acc_access", 
			"ACC_ACCESSTIME AS acc_accesstime", 
			"ACC_EXTRAFIELD AS acc_extrafield", 
			"ACC_EXTRASTRING AS acc_extrastring", 
			"ACC_CRC AS acc_crc" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ACC_GUID AS acc_guid", 
			"ACC_SITELIMITER AS acc_sitelimiter", 
			"ACC_APPLICATION AS acc_application", 
			"ACC_OPERATOR AS acc_operator", 
			"ACC_OPERATORSITE AS acc_operatorsite", 
			"ACC_HASHNUMBER AS acc_hashnumber", 
			"ACC_ACCESS AS acc_access", 
			"ACC_ACCESSTIME AS acc_accesstime", 
			"ACC_EXTRAFIELD AS acc_extrafield", 
			"ACC_EXTRASTRING AS acc_extrastring", 
			"ACC_CRC AS acc_crc" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
