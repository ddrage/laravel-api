<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Secwin_Counters extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.secwin_counters';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'cou_guid';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["cou_guid","cou_sitelimiter","cou_licenceguid","cou_minlevel","cou_maxlevel","cou_counterdescription","cou_limit","cou_extralong","cou_extrastring","cou_crc"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"COU_GUID AS cou_guid", 
			"COU_SITELIMITER AS cou_sitelimiter", 
			"COU_LICENCEGUID AS cou_licenceguid", 
			"COU_MINLEVEL AS cou_minlevel", 
			"COU_MAXLEVEL AS cou_maxlevel", 
			"COU_COUNTERDESCRIPTION AS cou_counterdescription", 
			"COU_LIMIT AS cou_limit", 
			"COU_EXTRALONG AS cou_extralong", 
			"COU_EXTRASTRING AS cou_extrastring", 
			"COU_CRC AS cou_crc" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"COU_GUID AS cou_guid", 
			"COU_SITELIMITER AS cou_sitelimiter", 
			"COU_LICENCEGUID AS cou_licenceguid", 
			"COU_MINLEVEL AS cou_minlevel", 
			"COU_MAXLEVEL AS cou_maxlevel", 
			"COU_COUNTERDESCRIPTION AS cou_counterdescription", 
			"COU_LIMIT AS cou_limit", 
			"COU_EXTRALONG AS cou_extralong", 
			"COU_EXTRASTRING AS cou_extrastring", 
			"COU_CRC AS cou_crc" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"COU_GUID AS cou_guid", 
			"COU_SITELIMITER AS cou_sitelimiter", 
			"COU_LICENCEGUID AS cou_licenceguid", 
			"COU_MINLEVEL AS cou_minlevel", 
			"COU_MAXLEVEL AS cou_maxlevel", 
			"COU_COUNTERDESCRIPTION AS cou_counterdescription", 
			"COU_LIMIT AS cou_limit", 
			"COU_EXTRALONG AS cou_extralong", 
			"COU_EXTRASTRING AS cou_extrastring", 
			"COU_CRC AS cou_crc" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"COU_GUID AS cou_guid", 
			"COU_SITELIMITER AS cou_sitelimiter", 
			"COU_LICENCEGUID AS cou_licenceguid", 
			"COU_MINLEVEL AS cou_minlevel", 
			"COU_MAXLEVEL AS cou_maxlevel", 
			"COU_COUNTERDESCRIPTION AS cou_counterdescription", 
			"COU_LIMIT AS cou_limit", 
			"COU_EXTRALONG AS cou_extralong", 
			"COU_EXTRASTRING AS cou_extrastring", 
			"COU_CRC AS cou_crc" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"COU_GUID AS cou_guid", 
			"COU_SITELIMITER AS cou_sitelimiter", 
			"COU_LICENCEGUID AS cou_licenceguid", 
			"COU_MINLEVEL AS cou_minlevel", 
			"COU_MAXLEVEL AS cou_maxlevel", 
			"COU_COUNTERDESCRIPTION AS cou_counterdescription", 
			"COU_LIMIT AS cou_limit", 
			"COU_EXTRALONG AS cou_extralong", 
			"COU_EXTRASTRING AS cou_extrastring", 
			"COU_CRC AS cou_crc" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
