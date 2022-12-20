<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Areacode extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.areacode';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'areacode';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["areacode","areaname","addpercent"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"AREACODE AS areacode", 
			"AREANAME AS areaname", 
			"ADDPERCENT AS addpercent" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"AREACODE AS areacode", 
			"AREANAME AS areaname", 
			"ADDPERCENT AS addpercent" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"AREACODE AS areacode", 
			"AREANAME AS areaname", 
			"ADDPERCENT AS addpercent" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"AREACODE AS areacode", 
			"AREANAME AS areaname", 
			"ADDPERCENT AS addpercent" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"AREACODE AS areacode", 
			"AREANAME AS areaname", 
			"ADDPERCENT AS addpercent" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
