<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Salesord extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.salesord';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'ordnum';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["ordnum","refdate","finishdate","acctcode","acctname","areacode","warecode","empcode","empname","personcode","personname","refordnum","terms","addpercent","discone","disctwo","grossnet","grossdisc","discount","netamount","svdamount","status","remarks","unitordnum","deliverycharge","mop_id","deliverydate","saletype","invoicetype","withdr","division","taxtype","ponumber","accountsgroup"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"ORDNUM AS ordnum", 
			"REFDATE AS refdate", 
			"FINISHDATE AS finishdate", 
			"ACCTCODE AS acctcode", 
			"ACCTNAME AS acctname", 
			"AREACODE AS areacode", 
			"WARECODE AS warecode", 
			"EMPCODE AS empcode", 
			"EMPNAME AS empname", 
			"PERSONCODE AS personcode", 
			"PERSONNAME AS personname", 
			"REFORDNUM AS refordnum", 
			"TERMS AS terms", 
			"ADDPERCENT AS addpercent", 
			"DISCONE AS discone", 
			"DISCTWO AS disctwo", 
			"GROSSNET AS grossnet", 
			"GROSSDISC AS grossdisc", 
			"DISCOUNT AS discount", 
			"NETAMOUNT AS netamount", 
			"SVDAMOUNT AS svdamount", 
			"STATUS AS status", 
			"REMARKS AS remarks", 
			"UNITORDNUM AS unitordnum", 
			"DELIVERYCHARGE AS deliverycharge", 
			"CREATED_AT AS created_at", 
			"MOP_ID AS mop_id", 
			"DELIVERYDATE AS deliverydate", 
			"SALETYPE AS saletype", 
			"INVOICETYPE AS invoicetype", 
			"WITHDR AS withdr", 
			"DIVISION AS division", 
			"TAXTYPE AS taxtype", 
			"PONUMBER AS ponumber", 
			"ACCOUNTSGROUP AS accountsgroup" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ORDNUM AS ordnum", 
			"REFDATE AS refdate", 
			"FINISHDATE AS finishdate", 
			"ACCTCODE AS acctcode", 
			"ACCTNAME AS acctname", 
			"AREACODE AS areacode", 
			"WARECODE AS warecode", 
			"EMPCODE AS empcode", 
			"EMPNAME AS empname", 
			"PERSONCODE AS personcode", 
			"PERSONNAME AS personname", 
			"REFORDNUM AS refordnum", 
			"TERMS AS terms", 
			"ADDPERCENT AS addpercent", 
			"DISCONE AS discone", 
			"DISCTWO AS disctwo", 
			"GROSSNET AS grossnet", 
			"GROSSDISC AS grossdisc", 
			"DISCOUNT AS discount", 
			"NETAMOUNT AS netamount", 
			"SVDAMOUNT AS svdamount", 
			"STATUS AS status", 
			"REMARKS AS remarks", 
			"UNITORDNUM AS unitordnum", 
			"DELIVERYCHARGE AS deliverycharge", 
			"CREATED_AT AS created_at", 
			"MOP_ID AS mop_id", 
			"DELIVERYDATE AS deliverydate", 
			"SALETYPE AS saletype", 
			"INVOICETYPE AS invoicetype", 
			"WITHDR AS withdr", 
			"DIVISION AS division", 
			"TAXTYPE AS taxtype", 
			"PONUMBER AS ponumber", 
			"ACCOUNTSGROUP AS accountsgroup" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ORDNUM AS ordnum", 
			"REFDATE AS refdate", 
			"FINISHDATE AS finishdate", 
			"ACCTCODE AS acctcode", 
			"ACCTNAME AS acctname", 
			"AREACODE AS areacode", 
			"WARECODE AS warecode", 
			"EMPCODE AS empcode", 
			"EMPNAME AS empname", 
			"PERSONCODE AS personcode", 
			"PERSONNAME AS personname", 
			"REFORDNUM AS refordnum", 
			"TERMS AS terms", 
			"ADDPERCENT AS addpercent", 
			"DISCONE AS discone", 
			"DISCTWO AS disctwo", 
			"GROSSNET AS grossnet", 
			"GROSSDISC AS grossdisc", 
			"DISCOUNT AS discount", 
			"NETAMOUNT AS netamount", 
			"SVDAMOUNT AS svdamount", 
			"STATUS AS status", 
			"REMARKS AS remarks", 
			"UNITORDNUM AS unitordnum", 
			"DELIVERYCHARGE AS deliverycharge", 
			"CREATED_AT AS created_at", 
			"MOP_ID AS mop_id", 
			"DELIVERYDATE AS deliverydate", 
			"SALETYPE AS saletype", 
			"INVOICETYPE AS invoicetype", 
			"WITHDR AS withdr", 
			"DIVISION AS division", 
			"TAXTYPE AS taxtype", 
			"PONUMBER AS ponumber", 
			"ACCOUNTSGROUP AS accountsgroup" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ORDNUM AS ordnum", 
			"REFDATE AS refdate", 
			"FINISHDATE AS finishdate", 
			"ACCTCODE AS acctcode", 
			"ACCTNAME AS acctname", 
			"AREACODE AS areacode", 
			"WARECODE AS warecode", 
			"EMPCODE AS empcode", 
			"EMPNAME AS empname", 
			"PERSONCODE AS personcode", 
			"PERSONNAME AS personname", 
			"REFORDNUM AS refordnum", 
			"TERMS AS terms", 
			"ADDPERCENT AS addpercent", 
			"DISCONE AS discone", 
			"DISCTWO AS disctwo", 
			"GROSSNET AS grossnet", 
			"GROSSDISC AS grossdisc", 
			"DISCOUNT AS discount", 
			"NETAMOUNT AS netamount", 
			"SVDAMOUNT AS svdamount", 
			"STATUS AS status", 
			"REMARKS AS remarks", 
			"UNITORDNUM AS unitordnum", 
			"DELIVERYCHARGE AS deliverycharge", 
			"CREATED_AT AS created_at", 
			"MOP_ID AS mop_id", 
			"DELIVERYDATE AS deliverydate", 
			"SALETYPE AS saletype", 
			"INVOICETYPE AS invoicetype", 
			"WITHDR AS withdr", 
			"DIVISION AS division", 
			"TAXTYPE AS taxtype", 
			"PONUMBER AS ponumber", 
			"ACCOUNTSGROUP AS accountsgroup" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ORDNUM AS ordnum", 
			"REFDATE AS refdate", 
			"FINISHDATE AS finishdate", 
			"ACCTCODE AS acctcode", 
			"ACCTNAME AS acctname", 
			"AREACODE AS areacode", 
			"WARECODE AS warecode", 
			"EMPCODE AS empcode", 
			"EMPNAME AS empname", 
			"PERSONCODE AS personcode", 
			"PERSONNAME AS personname", 
			"REFORDNUM AS refordnum", 
			"TERMS AS terms", 
			"ADDPERCENT AS addpercent", 
			"DISCONE AS discone", 
			"DISCTWO AS disctwo", 
			"GROSSNET AS grossnet", 
			"GROSSDISC AS grossdisc", 
			"DISCOUNT AS discount", 
			"NETAMOUNT AS netamount", 
			"SVDAMOUNT AS svdamount", 
			"STATUS AS status", 
			"REMARKS AS remarks", 
			"UNITORDNUM AS unitordnum", 
			"DELIVERYCHARGE AS deliverycharge", 
			"MOP_ID AS mop_id", 
			"DELIVERYDATE AS deliverydate", 
			"SALETYPE AS saletype", 
			"INVOICETYPE AS invoicetype", 
			"WITHDR AS withdr", 
			"DIVISION AS division", 
			"TAXTYPE AS taxtype", 
			"PONUMBER AS ponumber", 
			"ACCOUNTSGROUP AS accountsgroup" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
