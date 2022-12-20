<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Cstprice extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.cstprice';
	

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
	protected $fillable = ["acctcode","prodcode","unitcode","description","refdate","baseprice","markup","bymarkup","markupper","unitprice","unitmeas","contents","barcode"];
	

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
			"REFDATE AS refdate", 
			"BASEPRICE AS baseprice", 
			"MARKUP AS markup", 
			"BYMARKUP AS bymarkup", 
			"MARKUPPER AS markupper", 
			"UNITPRICE AS unitprice", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"BARCODE AS barcode" 
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
			"REFDATE AS refdate", 
			"BASEPRICE AS baseprice", 
			"MARKUP AS markup", 
			"BYMARKUP AS bymarkup", 
			"MARKUPPER AS markupper", 
			"UNITPRICE AS unitprice", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"BARCODE AS barcode" 
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
			"REFDATE AS refdate", 
			"BASEPRICE AS baseprice", 
			"MARKUP AS markup", 
			"BYMARKUP AS bymarkup", 
			"MARKUPPER AS markupper", 
			"UNITPRICE AS unitprice", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"BARCODE AS barcode" 
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
			"REFDATE AS refdate", 
			"BASEPRICE AS baseprice", 
			"MARKUP AS markup", 
			"BYMARKUP AS bymarkup", 
			"MARKUPPER AS markupper", 
			"UNITPRICE AS unitprice", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"BARCODE AS barcode" 
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
			"REFDATE AS refdate", 
			"BASEPRICE AS baseprice", 
			"MARKUP AS markup", 
			"BYMARKUP AS bymarkup", 
			"MARKUPPER AS markupper", 
			"UNITPRICE AS unitprice", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"BARCODE AS barcode" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
