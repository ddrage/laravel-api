<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Checks extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.Checks';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'checknumber';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["glhid","checknumber","bankid","bank","accountno","checkdate","cleardate","voucherno","status","checkstatus","amount","suppcode","date","particulars","ispayeesacct","checkno"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"GLHID AS glhid", 
			"CHECKNUMBER AS checknumber", 
			"BANKID AS bankid", 
			"BANK AS bank", 
			"ACCOUNTNO AS accountno", 
			"CHECKDATE AS checkdate", 
			"CLEARDATE AS cleardate", 
			"VOUCHERNO AS voucherno", 
			"STATUS AS status", 
			"CHECKSTATUS AS checkstatus", 
			"AMOUNT AS amount", 
			"SUPPCODE AS suppcode", 
			"DATE AS date", 
			"PARTICULARS AS particulars", 
			"ISPAYEESACCT AS ispayeesacct", 
			"CHECKNO AS checkno" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"GLHID AS glhid", 
			"CHECKNUMBER AS checknumber", 
			"BANKID AS bankid", 
			"BANK AS bank", 
			"ACCOUNTNO AS accountno", 
			"CHECKDATE AS checkdate", 
			"CLEARDATE AS cleardate", 
			"VOUCHERNO AS voucherno", 
			"STATUS AS status", 
			"CHECKSTATUS AS checkstatus", 
			"AMOUNT AS amount", 
			"SUPPCODE AS suppcode", 
			"DATE AS date", 
			"PARTICULARS AS particulars", 
			"ISPAYEESACCT AS ispayeesacct", 
			"CHECKNO AS checkno" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"GLHID AS glhid", 
			"CHECKNUMBER AS checknumber", 
			"BANKID AS bankid", 
			"BANK AS bank", 
			"ACCOUNTNO AS accountno", 
			"CHECKDATE AS checkdate", 
			"CLEARDATE AS cleardate", 
			"VOUCHERNO AS voucherno", 
			"STATUS AS status", 
			"CHECKSTATUS AS checkstatus", 
			"AMOUNT AS amount", 
			"SUPPCODE AS suppcode", 
			"DATE AS date", 
			"PARTICULARS AS particulars", 
			"ISPAYEESACCT AS ispayeesacct", 
			"CHECKNO AS checkno" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"GLHID AS glhid", 
			"CHECKNUMBER AS checknumber", 
			"BANKID AS bankid", 
			"BANK AS bank", 
			"ACCOUNTNO AS accountno", 
			"CHECKDATE AS checkdate", 
			"CLEARDATE AS cleardate", 
			"VOUCHERNO AS voucherno", 
			"STATUS AS status", 
			"CHECKSTATUS AS checkstatus", 
			"AMOUNT AS amount", 
			"SUPPCODE AS suppcode", 
			"DATE AS date", 
			"PARTICULARS AS particulars", 
			"ISPAYEESACCT AS ispayeesacct", 
			"CHECKNO AS checkno" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"GLHID AS glhid", 
			"CHECKNUMBER AS checknumber", 
			"BANKID AS bankid", 
			"BANK AS bank", 
			"ACCOUNTNO AS accountno", 
			"CHECKDATE AS checkdate", 
			"CLEARDATE AS cleardate", 
			"VOUCHERNO AS voucherno", 
			"STATUS AS status", 
			"CHECKSTATUS AS checkstatus", 
			"AMOUNT AS amount", 
			"SUPPCODE AS suppcode", 
			"DATE AS date", 
			"PARTICULARS AS particulars", 
			"ISPAYEESACCT AS ispayeesacct", 
			"CHECKNO AS checkno" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
