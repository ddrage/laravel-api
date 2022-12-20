<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Userdevices extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.UserDevices';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'periodid';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id","name","pw","number","deviceno","deviceid","outletid","branchid","inactive","uploaded","periodid","startdate","enddate"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"ID AS id", 
			"NAME AS name", 
			"PW AS pw", 
			"NUMBER AS number", 
			"DEVICENO AS deviceno", 
			"DEVICEID AS deviceid", 
			"OUTLETID AS outletid", 
			"BRANCHID AS branchid", 
			"INACTIVE AS inactive", 
			"UPLOADED AS uploaded", 
			"PERIODID AS periodid", 
			"STARTDATE AS startdate", 
			"ENDDATE AS enddate" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ID AS id", 
			"NAME AS name", 
			"PW AS pw", 
			"NUMBER AS number", 
			"DEVICENO AS deviceno", 
			"DEVICEID AS deviceid", 
			"OUTLETID AS outletid", 
			"BRANCHID AS branchid", 
			"INACTIVE AS inactive", 
			"UPLOADED AS uploaded", 
			"PERIODID AS periodid", 
			"STARTDATE AS startdate", 
			"ENDDATE AS enddate" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ID AS id", 
			"NAME AS name", 
			"PW AS pw", 
			"NUMBER AS number", 
			"DEVICENO AS deviceno", 
			"DEVICEID AS deviceid", 
			"OUTLETID AS outletid", 
			"BRANCHID AS branchid", 
			"INACTIVE AS inactive", 
			"UPLOADED AS uploaded", 
			"PERIODID AS periodid", 
			"STARTDATE AS startdate", 
			"ENDDATE AS enddate" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ID AS id", 
			"NAME AS name", 
			"PW AS pw", 
			"NUMBER AS number", 
			"DEVICENO AS deviceno", 
			"DEVICEID AS deviceid", 
			"OUTLETID AS outletid", 
			"BRANCHID AS branchid", 
			"INACTIVE AS inactive", 
			"UPLOADED AS uploaded", 
			"PERIODID AS periodid", 
			"STARTDATE AS startdate", 
			"ENDDATE AS enddate" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ID AS id", 
			"NAME AS name", 
			"PW AS pw", 
			"NUMBER AS number", 
			"DEVICENO AS deviceno", 
			"DEVICEID AS deviceid", 
			"OUTLETID AS outletid", 
			"BRANCHID AS branchid", 
			"INACTIVE AS inactive", 
			"UPLOADED AS uploaded", 
			"PERIODID AS periodid", 
			"STARTDATE AS startdate", 
			"ENDDATE AS enddate" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
