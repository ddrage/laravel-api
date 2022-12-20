<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Creditnote extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.CreditNote';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'creditnoteno';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["creditnoteno","acctcode","date","ornumber","overpaymentamount","used","remaining","reference","glhid"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"CREDITNOTENO AS creditnoteno", 
			"ACCTCODE AS acctcode", 
			"DATE AS date", 
			"ORNUMBER AS ornumber", 
			"OVERPAYMENTAMOUNT AS overpaymentamount", 
			"USED AS used", 
			"REMAINING AS remaining", 
			"REFERENCE AS reference", 
			"GLHID AS glhid" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"CREDITNOTENO AS creditnoteno", 
			"ACCTCODE AS acctcode", 
			"DATE AS date", 
			"ORNUMBER AS ornumber", 
			"OVERPAYMENTAMOUNT AS overpaymentamount", 
			"USED AS used", 
			"REMAINING AS remaining", 
			"REFERENCE AS reference", 
			"GLHID AS glhid" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"CREDITNOTENO AS creditnoteno", 
			"ACCTCODE AS acctcode", 
			"DATE AS date", 
			"ORNUMBER AS ornumber", 
			"OVERPAYMENTAMOUNT AS overpaymentamount", 
			"USED AS used", 
			"REMAINING AS remaining", 
			"REFERENCE AS reference", 
			"GLHID AS glhid" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"CREDITNOTENO AS creditnoteno", 
			"ACCTCODE AS acctcode", 
			"DATE AS date", 
			"ORNUMBER AS ornumber", 
			"OVERPAYMENTAMOUNT AS overpaymentamount", 
			"USED AS used", 
			"REMAINING AS remaining", 
			"REFERENCE AS reference", 
			"GLHID AS glhid" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"CREDITNOTENO AS creditnoteno", 
			"ACCTCODE AS acctcode", 
			"DATE AS date", 
			"ORNUMBER AS ornumber", 
			"OVERPAYMENTAMOUNT AS overpaymentamount", 
			"USED AS used", 
			"REMAINING AS remaining", 
			"REFERENCE AS reference", 
			"GLHID AS glhid" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
