<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Secwin_Operators5 extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.secwin_operators5';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'ope5_guid';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["ope5_guid","ope5_sitelimiter","ope5_login","ope5_firstname","ope5_surname","ope5_password","ope5_number","ope5_usergroup","ope5_lastpasswordchangedate","ope5_hook1","ope5_hook2","ope5_emailaddress","ope5_fingerprint1","ope5_fingerprint2","ope5_sitelow","ope5_sitehi","ope5_extralong","ope5_extrastring","ope5_usetemppwd","ope5_questions","ope5_reservedstring1","ope5_reservedstring2","ope5_reservedlong1","ope5_reservedlong2","ope5_crc"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				ope5_FINGERPRINT1 LIKE ?  OR 
				ope5_FINGERPRINT2 LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%"
		];
		//setting search conditions
		$query->whereRaw($search_condition, $search_params);
	}
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"ope5_GUID AS ope5_guid", 
			"ope5_SITELIMITER AS ope5_sitelimiter", 
			"ope5_LOGIN AS ope5_login", 
			"ope5_FIRSTNAME AS ope5_firstname", 
			"ope5_SURNAME AS ope5_surname", 
			"ope5_NUMBER AS ope5_number", 
			"ope5_USERGROUP AS ope5_usergroup", 
			"ope5_HOOK1 AS ope5_hook1", 
			"ope5_HOOK2 AS ope5_hook2", 
			"ope5_EMAILADDRESS AS ope5_emailaddress", 
			"ope5_FINGERPRINT1 AS ope5_fingerprint1", 
			"ope5_FINGERPRINT2 AS ope5_fingerprint2", 
			"ope5_SITELOW AS ope5_sitelow", 
			"ope5_SITEHI AS ope5_sitehi", 
			"ope5_EXTRALONG AS ope5_extralong", 
			"ope5_EXTRASTRING AS ope5_extrastring", 
			"ope5_usetemppwd", 
			"ope5_questions", 
			"ope5_reservedString1 AS ope5_reservedstring1", 
			"ope5_reservedString2 AS ope5_reservedstring2", 
			"ope5_reservedlong1", 
			"ope5_reservedlong2", 
			"ope5_CRC AS ope5_crc" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ope5_GUID AS ope5_guid", 
			"ope5_SITELIMITER AS ope5_sitelimiter", 
			"ope5_LOGIN AS ope5_login", 
			"ope5_FIRSTNAME AS ope5_firstname", 
			"ope5_SURNAME AS ope5_surname", 
			"ope5_NUMBER AS ope5_number", 
			"ope5_USERGROUP AS ope5_usergroup", 
			"ope5_HOOK1 AS ope5_hook1", 
			"ope5_HOOK2 AS ope5_hook2", 
			"ope5_EMAILADDRESS AS ope5_emailaddress", 
			"ope5_FINGERPRINT1 AS ope5_fingerprint1", 
			"ope5_FINGERPRINT2 AS ope5_fingerprint2", 
			"ope5_SITELOW AS ope5_sitelow", 
			"ope5_SITEHI AS ope5_sitehi", 
			"ope5_EXTRALONG AS ope5_extralong", 
			"ope5_EXTRASTRING AS ope5_extrastring", 
			"ope5_usetemppwd", 
			"ope5_questions", 
			"ope5_reservedString1 AS ope5_reservedstring1", 
			"ope5_reservedString2 AS ope5_reservedstring2", 
			"ope5_reservedlong1", 
			"ope5_reservedlong2", 
			"ope5_CRC AS ope5_crc" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ope5_GUID AS ope5_guid", 
			"ope5_SITELIMITER AS ope5_sitelimiter", 
			"ope5_LOGIN AS ope5_login", 
			"ope5_FIRSTNAME AS ope5_firstname", 
			"ope5_SURNAME AS ope5_surname", 
			"ope5_NUMBER AS ope5_number", 
			"ope5_USERGROUP AS ope5_usergroup", 
			"ope5_HOOK1 AS ope5_hook1", 
			"ope5_HOOK2 AS ope5_hook2", 
			"ope5_EMAILADDRESS AS ope5_emailaddress", 
			"ope5_FINGERPRINT1 AS ope5_fingerprint1", 
			"ope5_FINGERPRINT2 AS ope5_fingerprint2", 
			"ope5_SITELOW AS ope5_sitelow", 
			"ope5_SITEHI AS ope5_sitehi", 
			"ope5_EXTRALONG AS ope5_extralong", 
			"ope5_EXTRASTRING AS ope5_extrastring", 
			"ope5_usetemppwd", 
			"ope5_questions", 
			"ope5_reservedString1 AS ope5_reservedstring1", 
			"ope5_reservedString2 AS ope5_reservedstring2", 
			"ope5_reservedlong1", 
			"ope5_reservedlong2", 
			"ope5_CRC AS ope5_crc" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ope5_GUID AS ope5_guid", 
			"ope5_SITELIMITER AS ope5_sitelimiter", 
			"ope5_LOGIN AS ope5_login", 
			"ope5_FIRSTNAME AS ope5_firstname", 
			"ope5_SURNAME AS ope5_surname", 
			"ope5_NUMBER AS ope5_number", 
			"ope5_USERGROUP AS ope5_usergroup", 
			"ope5_HOOK1 AS ope5_hook1", 
			"ope5_HOOK2 AS ope5_hook2", 
			"ope5_EMAILADDRESS AS ope5_emailaddress", 
			"ope5_FINGERPRINT1 AS ope5_fingerprint1", 
			"ope5_FINGERPRINT2 AS ope5_fingerprint2", 
			"ope5_SITELOW AS ope5_sitelow", 
			"ope5_SITEHI AS ope5_sitehi", 
			"ope5_EXTRALONG AS ope5_extralong", 
			"ope5_EXTRASTRING AS ope5_extrastring", 
			"ope5_usetemppwd", 
			"ope5_questions", 
			"ope5_reservedString1 AS ope5_reservedstring1", 
			"ope5_reservedString2 AS ope5_reservedstring2", 
			"ope5_reservedlong1", 
			"ope5_reservedlong2", 
			"ope5_CRC AS ope5_crc" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ope5_GUID AS ope5_guid", 
			"ope5_SITELIMITER AS ope5_sitelimiter", 
			"ope5_LOGIN AS ope5_login", 
			"ope5_FIRSTNAME AS ope5_firstname", 
			"ope5_SURNAME AS ope5_surname", 
			"ope5_NUMBER AS ope5_number", 
			"ope5_USERGROUP AS ope5_usergroup", 
			"ope5_HOOK1 AS ope5_hook1", 
			"ope5_HOOK2 AS ope5_hook2", 
			"ope5_EMAILADDRESS AS ope5_emailaddress", 
			"ope5_FINGERPRINT1 AS ope5_fingerprint1", 
			"ope5_FINGERPRINT2 AS ope5_fingerprint2", 
			"ope5_SITELOW AS ope5_sitelow", 
			"ope5_SITEHI AS ope5_sitehi", 
			"ope5_EXTRALONG AS ope5_extralong", 
			"ope5_EXTRASTRING AS ope5_extrastring", 
			"ope5_usetemppwd", 
			"ope5_questions", 
			"ope5_reservedString1 AS ope5_reservedstring1", 
			"ope5_reservedString2 AS ope5_reservedstring2", 
			"ope5_reservedlong1", 
			"ope5_reservedlong2", 
			"ope5_CRC AS ope5_crc" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
