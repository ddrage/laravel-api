<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Secwin_Operatorsusergroups extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.secwin_operatorsusergroups';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'oug_guid';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["oug_guid","oug_operatornumber","oug_operatorsitelimiter","oug_usergroup","oug_usergroupsitelimiter","oug_extralong","oug_crc"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"OUG_GUID AS oug_guid", 
			"OUG_OPERATORNUMBER AS oug_operatornumber", 
			"OUG_OPERATORSITELIMITER AS oug_operatorsitelimiter", 
			"OUG_USERGROUP AS oug_usergroup", 
			"OUG_USERGROUPSITELIMITER AS oug_usergroupsitelimiter", 
			"OUG_EXTRALONG AS oug_extralong", 
			"OUG_CRC AS oug_crc" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"OUG_GUID AS oug_guid", 
			"OUG_OPERATORNUMBER AS oug_operatornumber", 
			"OUG_OPERATORSITELIMITER AS oug_operatorsitelimiter", 
			"OUG_USERGROUP AS oug_usergroup", 
			"OUG_USERGROUPSITELIMITER AS oug_usergroupsitelimiter", 
			"OUG_EXTRALONG AS oug_extralong", 
			"OUG_CRC AS oug_crc" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"OUG_GUID AS oug_guid", 
			"OUG_OPERATORNUMBER AS oug_operatornumber", 
			"OUG_OPERATORSITELIMITER AS oug_operatorsitelimiter", 
			"OUG_USERGROUP AS oug_usergroup", 
			"OUG_USERGROUPSITELIMITER AS oug_usergroupsitelimiter", 
			"OUG_EXTRALONG AS oug_extralong", 
			"OUG_CRC AS oug_crc" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"OUG_GUID AS oug_guid", 
			"OUG_OPERATORNUMBER AS oug_operatornumber", 
			"OUG_OPERATORSITELIMITER AS oug_operatorsitelimiter", 
			"OUG_USERGROUP AS oug_usergroup", 
			"OUG_USERGROUPSITELIMITER AS oug_usergroupsitelimiter", 
			"OUG_EXTRALONG AS oug_extralong", 
			"OUG_CRC AS oug_crc" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"OUG_GUID AS oug_guid", 
			"OUG_OPERATORNUMBER AS oug_operatornumber", 
			"OUG_OPERATORSITELIMITER AS oug_operatorsitelimiter", 
			"OUG_USERGROUP AS oug_usergroup", 
			"OUG_USERGROUPSITELIMITER AS oug_usergroupsitelimiter", 
			"OUG_EXTRALONG AS oug_extralong", 
			"OUG_CRC AS oug_crc" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
