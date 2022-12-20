<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Secwin_Namecodes extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.secwin_namecodes';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'nam_guid';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["nam_guid","nam_sitelimiter","nam_appnumber","nam_name","nam_hashnumber","nam_extralong","nam_extrastring","nam_crc"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"NAM_GUID AS nam_guid", 
			"NAM_SITELIMITER AS nam_sitelimiter", 
			"NAM_APPNUMBER AS nam_appnumber", 
			"NAM_NAME AS nam_name", 
			"NAM_HASHNUMBER AS nam_hashnumber", 
			"NAM_EXTRALONG AS nam_extralong", 
			"NAM_EXTRASTRING AS nam_extrastring", 
			"NAM_CRC AS nam_crc" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"NAM_GUID AS nam_guid", 
			"NAM_SITELIMITER AS nam_sitelimiter", 
			"NAM_APPNUMBER AS nam_appnumber", 
			"NAM_NAME AS nam_name", 
			"NAM_HASHNUMBER AS nam_hashnumber", 
			"NAM_EXTRALONG AS nam_extralong", 
			"NAM_EXTRASTRING AS nam_extrastring", 
			"NAM_CRC AS nam_crc" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"NAM_GUID AS nam_guid", 
			"NAM_SITELIMITER AS nam_sitelimiter", 
			"NAM_APPNUMBER AS nam_appnumber", 
			"NAM_NAME AS nam_name", 
			"NAM_HASHNUMBER AS nam_hashnumber", 
			"NAM_EXTRALONG AS nam_extralong", 
			"NAM_EXTRASTRING AS nam_extrastring", 
			"NAM_CRC AS nam_crc" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"NAM_GUID AS nam_guid", 
			"NAM_SITELIMITER AS nam_sitelimiter", 
			"NAM_APPNUMBER AS nam_appnumber", 
			"NAM_NAME AS nam_name", 
			"NAM_HASHNUMBER AS nam_hashnumber", 
			"NAM_EXTRALONG AS nam_extralong", 
			"NAM_EXTRASTRING AS nam_extrastring", 
			"NAM_CRC AS nam_crc" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"NAM_GUID AS nam_guid", 
			"NAM_SITELIMITER AS nam_sitelimiter", 
			"NAM_APPNUMBER AS nam_appnumber", 
			"NAM_NAME AS nam_name", 
			"NAM_HASHNUMBER AS nam_hashnumber", 
			"NAM_EXTRALONG AS nam_extralong", 
			"NAM_EXTRASTRING AS nam_extrastring", 
			"NAM_CRC AS nam_crc" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
