<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Purchase extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.purchase';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'ponum';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["ponum","suppinvno","refdate","acctcode","amount","served","balance","remone","remtwo","remthree","remfour","remfive","division"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"PONUM AS ponum", 
			"SUPPINVNO AS suppinvno", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"AMOUNT AS amount", 
			"SERVED AS served", 
			"BALANCE AS balance", 
			"REMONE AS remone", 
			"REMTWO AS remtwo", 
			"REMTHREE AS remthree", 
			"REMFOUR AS remfour", 
			"REMFIVE AS remfive", 
			"DIVISION AS division" 
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
			"SUPPINVNO AS suppinvno", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"AMOUNT AS amount", 
			"SERVED AS served", 
			"BALANCE AS balance", 
			"REMONE AS remone", 
			"REMTWO AS remtwo", 
			"REMTHREE AS remthree", 
			"REMFOUR AS remfour", 
			"REMFIVE AS remfive", 
			"DIVISION AS division" 
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
			"SUPPINVNO AS suppinvno", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"AMOUNT AS amount", 
			"SERVED AS served", 
			"BALANCE AS balance", 
			"REMONE AS remone", 
			"REMTWO AS remtwo", 
			"REMTHREE AS remthree", 
			"REMFOUR AS remfour", 
			"REMFIVE AS remfive", 
			"DIVISION AS division" 
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
			"SUPPINVNO AS suppinvno", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"AMOUNT AS amount", 
			"SERVED AS served", 
			"BALANCE AS balance", 
			"REMONE AS remone", 
			"REMTWO AS remtwo", 
			"REMTHREE AS remthree", 
			"REMFOUR AS remfour", 
			"REMFIVE AS remfive", 
			"DIVISION AS division" 
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
			"SUPPINVNO AS suppinvno", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"AMOUNT AS amount", 
			"SERVED AS served", 
			"BALANCE AS balance", 
			"REMONE AS remone", 
			"REMTWO AS remtwo", 
			"REMTHREE AS remthree", 
			"REMFOUR AS remfour", 
			"REMFIVE AS remfive", 
			"DIVISION AS division" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
