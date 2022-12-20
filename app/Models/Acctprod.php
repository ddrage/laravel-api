<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Acctprod extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.acctprod';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'unitcode';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["acctcode","prodcode","unitcode","description","partnum","unitcost","refdate","currcost","unitmeas","unitprice","pricedate"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"ACCTCODE AS acctcode", 
			"PRODCODE AS prodcode", 
			"UNITCODE AS unitcode", 
			"DESCRIPTION AS description", 
			"PARTNUM AS partnum", 
			"UNITCOST AS unitcost", 
			"REFDATE AS refdate", 
			"CURRCOST AS currcost", 
			"UNITMEAS AS unitmeas", 
			"UNITPRICE AS unitprice", 
			"PRICEDATE AS pricedate" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ACCTCODE AS acctcode", 
			"PRODCODE AS prodcode", 
			"UNITCODE AS unitcode", 
			"DESCRIPTION AS description", 
			"PARTNUM AS partnum", 
			"UNITCOST AS unitcost", 
			"REFDATE AS refdate", 
			"CURRCOST AS currcost", 
			"UNITMEAS AS unitmeas", 
			"UNITPRICE AS unitprice", 
			"PRICEDATE AS pricedate" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ACCTCODE AS acctcode", 
			"PRODCODE AS prodcode", 
			"UNITCODE AS unitcode", 
			"DESCRIPTION AS description", 
			"PARTNUM AS partnum", 
			"UNITCOST AS unitcost", 
			"REFDATE AS refdate", 
			"CURRCOST AS currcost", 
			"UNITMEAS AS unitmeas", 
			"UNITPRICE AS unitprice", 
			"PRICEDATE AS pricedate" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ACCTCODE AS acctcode", 
			"PRODCODE AS prodcode", 
			"UNITCODE AS unitcode", 
			"DESCRIPTION AS description", 
			"PARTNUM AS partnum", 
			"UNITCOST AS unitcost", 
			"REFDATE AS refdate", 
			"CURRCOST AS currcost", 
			"UNITMEAS AS unitmeas", 
			"UNITPRICE AS unitprice", 
			"PRICEDATE AS pricedate" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ACCTCODE AS acctcode", 
			"PRODCODE AS prodcode", 
			"UNITCODE AS unitcode", 
			"DESCRIPTION AS description", 
			"PARTNUM AS partnum", 
			"UNITCOST AS unitcost", 
			"REFDATE AS refdate", 
			"CURRCOST AS currcost", 
			"UNITMEAS AS unitmeas", 
			"UNITPRICE AS unitprice", 
			"PRICEDATE AS pricedate" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
