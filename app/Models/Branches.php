<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Branches extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.Branches';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'branchid';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["branchid","zoneno","datadrive","backupdrive","updatedrive","type","branchname","currentoperatorcode","operatorname","branchaddress","businessphone","emailaddress","telephone","cellular","branchcode","plantcode","costcentercode","poremarks1","poremarks2","poremarks3","poremarks4"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"BRANCHID AS branchid", 
			"ZONENO AS zoneno", 
			"DATADRIVE AS datadrive", 
			"BACKUPDRIVE AS backupdrive", 
			"UPDATEDRIVE AS updatedrive", 
			"TYPE AS type", 
			"BRANCHNAME AS branchname", 
			"CURRENTOPERATORCODE AS currentoperatorcode", 
			"OPERATORNAME AS operatorname", 
			"BRANCHADDRESS AS branchaddress", 
			"BUSINESSPHONE AS businessphone", 
			"EMAILADDRESS AS emailaddress", 
			"TELEPHONE AS telephone", 
			"CELLULAR AS cellular", 
			"BRANCHCODE AS branchcode", 
			"PLANTCODE AS plantcode", 
			"COSTCENTERCODE AS costcentercode", 
			"POREMARKS1 AS poremarks1", 
			"POREMARKS2 AS poremarks2", 
			"POREMARKS3 AS poremarks3", 
			"POREMARKS4 AS poremarks4" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"BRANCHID AS branchid", 
			"ZONENO AS zoneno", 
			"DATADRIVE AS datadrive", 
			"BACKUPDRIVE AS backupdrive", 
			"UPDATEDRIVE AS updatedrive", 
			"TYPE AS type", 
			"BRANCHNAME AS branchname", 
			"CURRENTOPERATORCODE AS currentoperatorcode", 
			"OPERATORNAME AS operatorname", 
			"BRANCHADDRESS AS branchaddress", 
			"BUSINESSPHONE AS businessphone", 
			"EMAILADDRESS AS emailaddress", 
			"TELEPHONE AS telephone", 
			"CELLULAR AS cellular", 
			"BRANCHCODE AS branchcode", 
			"PLANTCODE AS plantcode", 
			"COSTCENTERCODE AS costcentercode", 
			"POREMARKS1 AS poremarks1", 
			"POREMARKS2 AS poremarks2", 
			"POREMARKS3 AS poremarks3", 
			"POREMARKS4 AS poremarks4" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"BRANCHID AS branchid", 
			"ZONENO AS zoneno", 
			"DATADRIVE AS datadrive", 
			"BACKUPDRIVE AS backupdrive", 
			"UPDATEDRIVE AS updatedrive", 
			"TYPE AS type", 
			"BRANCHNAME AS branchname", 
			"CURRENTOPERATORCODE AS currentoperatorcode", 
			"OPERATORNAME AS operatorname", 
			"BRANCHADDRESS AS branchaddress", 
			"BUSINESSPHONE AS businessphone", 
			"EMAILADDRESS AS emailaddress", 
			"TELEPHONE AS telephone", 
			"CELLULAR AS cellular", 
			"BRANCHCODE AS branchcode", 
			"PLANTCODE AS plantcode", 
			"COSTCENTERCODE AS costcentercode", 
			"POREMARKS1 AS poremarks1", 
			"POREMARKS2 AS poremarks2", 
			"POREMARKS3 AS poremarks3", 
			"POREMARKS4 AS poremarks4" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"BRANCHID AS branchid", 
			"ZONENO AS zoneno", 
			"DATADRIVE AS datadrive", 
			"BACKUPDRIVE AS backupdrive", 
			"UPDATEDRIVE AS updatedrive", 
			"TYPE AS type", 
			"BRANCHNAME AS branchname", 
			"CURRENTOPERATORCODE AS currentoperatorcode", 
			"OPERATORNAME AS operatorname", 
			"BRANCHADDRESS AS branchaddress", 
			"BUSINESSPHONE AS businessphone", 
			"EMAILADDRESS AS emailaddress", 
			"TELEPHONE AS telephone", 
			"CELLULAR AS cellular", 
			"BRANCHCODE AS branchcode", 
			"PLANTCODE AS plantcode", 
			"COSTCENTERCODE AS costcentercode", 
			"POREMARKS1 AS poremarks1", 
			"POREMARKS2 AS poremarks2", 
			"POREMARKS3 AS poremarks3", 
			"POREMARKS4 AS poremarks4" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"BRANCHID AS branchid", 
			"ZONENO AS zoneno", 
			"DATADRIVE AS datadrive", 
			"BACKUPDRIVE AS backupdrive", 
			"UPDATEDRIVE AS updatedrive", 
			"TYPE AS type", 
			"BRANCHNAME AS branchname", 
			"CURRENTOPERATORCODE AS currentoperatorcode", 
			"OPERATORNAME AS operatorname", 
			"BRANCHADDRESS AS branchaddress", 
			"BUSINESSPHONE AS businessphone", 
			"EMAILADDRESS AS emailaddress", 
			"TELEPHONE AS telephone", 
			"CELLULAR AS cellular", 
			"BRANCHCODE AS branchcode", 
			"PLANTCODE AS plantcode", 
			"COSTCENTERCODE AS costcentercode", 
			"POREMARKS1 AS poremarks1", 
			"POREMARKS2 AS poremarks2", 
			"POREMARKS3 AS poremarks3", 
			"POREMARKS4 AS poremarks4" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
