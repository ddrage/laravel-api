<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Puritems extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.puritems';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'prodcode';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["ponum","acctcode","prodcode","description","trandate","partnum","quantity","unitmeas","contents","unitcost","svdqty","balance","currcost","currency","unitcode","innerunit","innercont","division","uom","pouom","amount"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"PONUM AS ponum", 
			"ACCTCODE AS acctcode", 
			"PRODCODE AS prodcode", 
			"DESCRIPTION AS description", 
			"TRANDATE AS trandate", 
			"PARTNUM AS partnum", 
			"QUANTITY AS quantity", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"UNITCOST AS unitcost", 
			"SVDQTY AS svdqty", 
			"BALANCE AS balance", 
			"CURRCOST AS currcost", 
			"CURRENCY AS currency", 
			"UNITCODE AS unitcode", 
			"INNERUNIT AS innerunit", 
			"INNERCONT AS innercont", 
			"DIVISION AS division", 
			"UOM AS uom", 
			"POUOM AS pouom", 
			"AMOUNT AS amount" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"PONUM AS ponum", 
			"ACCTCODE AS acctcode", 
			"PRODCODE AS prodcode", 
			"DESCRIPTION AS description", 
			"TRANDATE AS trandate", 
			"PARTNUM AS partnum", 
			"QUANTITY AS quantity", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"UNITCOST AS unitcost", 
			"SVDQTY AS svdqty", 
			"BALANCE AS balance", 
			"CURRCOST AS currcost", 
			"CURRENCY AS currency", 
			"UNITCODE AS unitcode", 
			"INNERUNIT AS innerunit", 
			"INNERCONT AS innercont", 
			"DIVISION AS division", 
			"UOM AS uom", 
			"POUOM AS pouom", 
			"AMOUNT AS amount" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"PONUM AS ponum", 
			"ACCTCODE AS acctcode", 
			"PRODCODE AS prodcode", 
			"DESCRIPTION AS description", 
			"TRANDATE AS trandate", 
			"PARTNUM AS partnum", 
			"QUANTITY AS quantity", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"UNITCOST AS unitcost", 
			"SVDQTY AS svdqty", 
			"BALANCE AS balance", 
			"CURRCOST AS currcost", 
			"CURRENCY AS currency", 
			"UNITCODE AS unitcode", 
			"INNERUNIT AS innerunit", 
			"INNERCONT AS innercont", 
			"DIVISION AS division", 
			"UOM AS uom", 
			"POUOM AS pouom", 
			"AMOUNT AS amount" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"PONUM AS ponum", 
			"ACCTCODE AS acctcode", 
			"PRODCODE AS prodcode", 
			"DESCRIPTION AS description", 
			"TRANDATE AS trandate", 
			"PARTNUM AS partnum", 
			"QUANTITY AS quantity", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"UNITCOST AS unitcost", 
			"SVDQTY AS svdqty", 
			"BALANCE AS balance", 
			"CURRCOST AS currcost", 
			"CURRENCY AS currency", 
			"UNITCODE AS unitcode", 
			"INNERUNIT AS innerunit", 
			"INNERCONT AS innercont", 
			"DIVISION AS division", 
			"UOM AS uom", 
			"POUOM AS pouom", 
			"AMOUNT AS amount" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"PONUM AS ponum", 
			"ACCTCODE AS acctcode", 
			"PRODCODE AS prodcode", 
			"DESCRIPTION AS description", 
			"TRANDATE AS trandate", 
			"PARTNUM AS partnum", 
			"QUANTITY AS quantity", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"UNITCOST AS unitcost", 
			"SVDQTY AS svdqty", 
			"BALANCE AS balance", 
			"CURRCOST AS currcost", 
			"CURRENCY AS currency", 
			"UNITCODE AS unitcode", 
			"INNERUNIT AS innerunit", 
			"INNERCONT AS innercont", 
			"DIVISION AS division", 
			"UOM AS uom", 
			"POUOM AS pouom", 
			"AMOUNT AS amount" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
