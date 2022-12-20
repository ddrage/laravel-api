<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Accountgroup extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.AccountGroup';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'accountgroupcode';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["accountgroupcode","description","contactname","address","telephone","mobielno","emailaddress","website"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"ACCOUNTGROUPCODE AS accountgroupcode", 
			"DESCRIPTION AS description", 
			"CONTACTNAME AS contactname", 
			"ADDRESS AS address", 
			"TELEPHONE AS telephone", 
			"MOBIELNO AS mobielno", 
			"EMAILADDRESS AS emailaddress", 
			"WEBSITE AS website" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ACCOUNTGROUPCODE AS accountgroupcode", 
			"DESCRIPTION AS description", 
			"CONTACTNAME AS contactname", 
			"ADDRESS AS address", 
			"TELEPHONE AS telephone", 
			"MOBIELNO AS mobielno", 
			"EMAILADDRESS AS emailaddress", 
			"WEBSITE AS website" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ACCOUNTGROUPCODE AS accountgroupcode", 
			"DESCRIPTION AS description", 
			"CONTACTNAME AS contactname", 
			"ADDRESS AS address", 
			"TELEPHONE AS telephone", 
			"MOBIELNO AS mobielno", 
			"EMAILADDRESS AS emailaddress", 
			"WEBSITE AS website" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ACCOUNTGROUPCODE AS accountgroupcode", 
			"DESCRIPTION AS description", 
			"CONTACTNAME AS contactname", 
			"ADDRESS AS address", 
			"TELEPHONE AS telephone", 
			"MOBIELNO AS mobielno", 
			"EMAILADDRESS AS emailaddress", 
			"WEBSITE AS website" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ACCOUNTGROUPCODE AS accountgroupcode", 
			"DESCRIPTION AS description", 
			"CONTACTNAME AS contactname", 
			"ADDRESS AS address", 
			"TELEPHONE AS telephone", 
			"MOBIELNO AS mobielno", 
			"EMAILADDRESS AS emailaddress", 
			"WEBSITE AS website" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
