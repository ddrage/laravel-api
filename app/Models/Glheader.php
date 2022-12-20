<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Glheader extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.GLHEADER';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'glhid';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["glhid","books","gltype","empno","shift","posno","turnoverid","refnum","refdate","date","apv_number","srrnumber","transactiontype","invoiceno","orderno","suppcode","payee","payeetype","bankname","bankaccount","cleardate","check_no","checkdate","amount","checkamount","balance","paid","debits","credits","cancelled","disbursed","posted","checkissued","explain","checkpayment","invoiceselect","locked","branchcode","deptcode","refnumsub","monthseries","yearseries","reference","month","year","brno","agentcode","customerno","preparedby","checkedby","approvedby","casno","rfpno","rbsno","lqfno","serfno","status","bankid","hqbranchdaysalesid","ap_amount","ca_amount","ap_ca","counterno","authorizedby","ispayeesacct","counterdate","division","collectorid","ewtax","bwtax","wtax","vatablesales","vatamount","vatexempt","zerorated","scpwddiscount","netdue","netamount","taxbase"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"GLHID AS glhid", 
			"BOOKS AS books", 
			"GLTYPE AS gltype", 
			"EMPNO AS empno", 
			"SHIFT AS shift", 
			"POSNO AS posno", 
			"TURNOVERID AS turnoverid", 
			"REFNUM AS refnum", 
			"REFDATE AS refdate", 
			"DATE AS date", 
			"APV_NUMBER AS apv_number", 
			"SRRNUMBER AS srrnumber", 
			"TRANSACTIONTYPE AS transactiontype", 
			"INVOICENO AS invoiceno", 
			"ORDERNO AS orderno", 
			"SUPPCODE AS suppcode", 
			"PAYEE AS payee", 
			"PAYEETYPE AS payeetype", 
			"BANKNAME AS bankname", 
			"BANKACCOUNT AS bankaccount", 
			"CLEARDATE AS cleardate", 
			"CHECK_NO AS check_no", 
			"CHECKDATE AS checkdate", 
			"AMOUNT AS amount", 
			"CHECKAMOUNT AS checkamount", 
			"BALANCE AS balance", 
			"PAID AS paid", 
			"DEBITS AS debits", 
			"CREDITS AS credits", 
			"CANCELLED AS cancelled", 
			"DISBURSED AS disbursed", 
			"POSTED AS posted", 
			"CHECKISSUED AS checkissued", 
			"EXPLAIN AS explain", 
			"CHECKPAYMENT AS checkpayment", 
			"INVOICESELECT AS invoiceselect", 
			"LOCKED AS locked", 
			"BRANCHCODE AS branchcode", 
			"DEPTCODE AS deptcode", 
			"REFNUMSUB AS refnumsub", 
			"MONTHSERIES AS monthseries", 
			"YEARSERIES AS yearseries", 
			"REFERENCE AS reference", 
			"MONTH AS month", 
			"YEAR AS year", 
			"BRNO AS brno", 
			"AGENTCODE AS agentcode", 
			"CUSTOMERNO AS customerno", 
			"PREPAREDBY AS preparedby", 
			"CHECKEDBY AS checkedby", 
			"APPROVEDBY AS approvedby", 
			"CASNO AS casno", 
			"RFPNO AS rfpno", 
			"RBSNO AS rbsno", 
			"LQFNO AS lqfno", 
			"SERFNO AS serfno", 
			"STATUS AS status", 
			"BANKID AS bankid", 
			"HQBRANCHDAYSALESID AS hqbranchdaysalesid", 
			"AP_AMOUNT AS ap_amount", 
			"CA_AMOUNT AS ca_amount", 
			"AP_CA AS ap_ca", 
			"COUNTERNO AS counterno", 
			"AUTHORIZEDBY AS authorizedby", 
			"ISPAYEESACCT AS ispayeesacct", 
			"COUNTERDATE AS counterdate", 
			"DIVISION AS division", 
			"COLLECTORID AS collectorid", 
			"EWTAX AS ewtax", 
			"BWTAX AS bwtax", 
			"WTAX AS wtax", 
			"VATABLESALES AS vatablesales", 
			"VATAMOUNT AS vatamount", 
			"VATEXEMPT AS vatexempt", 
			"ZERORATED AS zerorated", 
			"SCPWDDISCOUNT AS scpwddiscount", 
			"NETDUE AS netdue", 
			"NETAMOUNT AS netamount", 
			"TAXBASE AS taxbase" 
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
			"BOOKS AS books", 
			"GLTYPE AS gltype", 
			"EMPNO AS empno", 
			"SHIFT AS shift", 
			"POSNO AS posno", 
			"TURNOVERID AS turnoverid", 
			"REFNUM AS refnum", 
			"REFDATE AS refdate", 
			"DATE AS date", 
			"APV_NUMBER AS apv_number", 
			"SRRNUMBER AS srrnumber", 
			"TRANSACTIONTYPE AS transactiontype", 
			"INVOICENO AS invoiceno", 
			"ORDERNO AS orderno", 
			"SUPPCODE AS suppcode", 
			"PAYEE AS payee", 
			"PAYEETYPE AS payeetype", 
			"BANKNAME AS bankname", 
			"BANKACCOUNT AS bankaccount", 
			"CLEARDATE AS cleardate", 
			"CHECK_NO AS check_no", 
			"CHECKDATE AS checkdate", 
			"AMOUNT AS amount", 
			"CHECKAMOUNT AS checkamount", 
			"BALANCE AS balance", 
			"PAID AS paid", 
			"DEBITS AS debits", 
			"CREDITS AS credits", 
			"CANCELLED AS cancelled", 
			"DISBURSED AS disbursed", 
			"POSTED AS posted", 
			"CHECKISSUED AS checkissued", 
			"EXPLAIN AS explain", 
			"CHECKPAYMENT AS checkpayment", 
			"INVOICESELECT AS invoiceselect", 
			"LOCKED AS locked", 
			"BRANCHCODE AS branchcode", 
			"DEPTCODE AS deptcode", 
			"REFNUMSUB AS refnumsub", 
			"MONTHSERIES AS monthseries", 
			"YEARSERIES AS yearseries", 
			"REFERENCE AS reference", 
			"MONTH AS month", 
			"YEAR AS year", 
			"BRNO AS brno", 
			"AGENTCODE AS agentcode", 
			"CUSTOMERNO AS customerno", 
			"PREPAREDBY AS preparedby", 
			"CHECKEDBY AS checkedby", 
			"APPROVEDBY AS approvedby", 
			"CASNO AS casno", 
			"RFPNO AS rfpno", 
			"RBSNO AS rbsno", 
			"LQFNO AS lqfno", 
			"SERFNO AS serfno", 
			"STATUS AS status", 
			"BANKID AS bankid", 
			"HQBRANCHDAYSALESID AS hqbranchdaysalesid", 
			"AP_AMOUNT AS ap_amount", 
			"CA_AMOUNT AS ca_amount", 
			"AP_CA AS ap_ca", 
			"COUNTERNO AS counterno", 
			"AUTHORIZEDBY AS authorizedby", 
			"ISPAYEESACCT AS ispayeesacct", 
			"COUNTERDATE AS counterdate", 
			"DIVISION AS division", 
			"COLLECTORID AS collectorid", 
			"EWTAX AS ewtax", 
			"BWTAX AS bwtax", 
			"WTAX AS wtax", 
			"VATABLESALES AS vatablesales", 
			"VATAMOUNT AS vatamount", 
			"VATEXEMPT AS vatexempt", 
			"ZERORATED AS zerorated", 
			"SCPWDDISCOUNT AS scpwddiscount", 
			"NETDUE AS netdue", 
			"NETAMOUNT AS netamount", 
			"TAXBASE AS taxbase" 
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
			"BOOKS AS books", 
			"GLTYPE AS gltype", 
			"EMPNO AS empno", 
			"SHIFT AS shift", 
			"POSNO AS posno", 
			"TURNOVERID AS turnoverid", 
			"REFNUM AS refnum", 
			"REFDATE AS refdate", 
			"DATE AS date", 
			"APV_NUMBER AS apv_number", 
			"SRRNUMBER AS srrnumber", 
			"TRANSACTIONTYPE AS transactiontype", 
			"INVOICENO AS invoiceno", 
			"ORDERNO AS orderno", 
			"SUPPCODE AS suppcode", 
			"PAYEE AS payee", 
			"PAYEETYPE AS payeetype", 
			"BANKNAME AS bankname", 
			"BANKACCOUNT AS bankaccount", 
			"CLEARDATE AS cleardate", 
			"CHECK_NO AS check_no", 
			"CHECKDATE AS checkdate", 
			"AMOUNT AS amount", 
			"CHECKAMOUNT AS checkamount", 
			"BALANCE AS balance", 
			"PAID AS paid", 
			"DEBITS AS debits", 
			"CREDITS AS credits", 
			"CANCELLED AS cancelled", 
			"DISBURSED AS disbursed", 
			"POSTED AS posted", 
			"CHECKISSUED AS checkissued", 
			"EXPLAIN AS explain", 
			"CHECKPAYMENT AS checkpayment", 
			"INVOICESELECT AS invoiceselect", 
			"LOCKED AS locked", 
			"BRANCHCODE AS branchcode", 
			"DEPTCODE AS deptcode", 
			"REFNUMSUB AS refnumsub", 
			"MONTHSERIES AS monthseries", 
			"YEARSERIES AS yearseries", 
			"REFERENCE AS reference", 
			"MONTH AS month", 
			"YEAR AS year", 
			"BRNO AS brno", 
			"AGENTCODE AS agentcode", 
			"CUSTOMERNO AS customerno", 
			"PREPAREDBY AS preparedby", 
			"CHECKEDBY AS checkedby", 
			"APPROVEDBY AS approvedby", 
			"CASNO AS casno", 
			"RFPNO AS rfpno", 
			"RBSNO AS rbsno", 
			"LQFNO AS lqfno", 
			"SERFNO AS serfno", 
			"STATUS AS status", 
			"BANKID AS bankid", 
			"HQBRANCHDAYSALESID AS hqbranchdaysalesid", 
			"AP_AMOUNT AS ap_amount", 
			"CA_AMOUNT AS ca_amount", 
			"AP_CA AS ap_ca", 
			"COUNTERNO AS counterno", 
			"AUTHORIZEDBY AS authorizedby", 
			"ISPAYEESACCT AS ispayeesacct", 
			"COUNTERDATE AS counterdate", 
			"DIVISION AS division", 
			"COLLECTORID AS collectorid", 
			"EWTAX AS ewtax", 
			"BWTAX AS bwtax", 
			"WTAX AS wtax", 
			"VATABLESALES AS vatablesales", 
			"VATAMOUNT AS vatamount", 
			"VATEXEMPT AS vatexempt", 
			"ZERORATED AS zerorated", 
			"SCPWDDISCOUNT AS scpwddiscount", 
			"NETDUE AS netdue", 
			"NETAMOUNT AS netamount", 
			"TAXBASE AS taxbase" 
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
			"BOOKS AS books", 
			"GLTYPE AS gltype", 
			"EMPNO AS empno", 
			"SHIFT AS shift", 
			"POSNO AS posno", 
			"TURNOVERID AS turnoverid", 
			"REFNUM AS refnum", 
			"REFDATE AS refdate", 
			"DATE AS date", 
			"APV_NUMBER AS apv_number", 
			"SRRNUMBER AS srrnumber", 
			"TRANSACTIONTYPE AS transactiontype", 
			"INVOICENO AS invoiceno", 
			"ORDERNO AS orderno", 
			"SUPPCODE AS suppcode", 
			"PAYEE AS payee", 
			"PAYEETYPE AS payeetype", 
			"BANKNAME AS bankname", 
			"BANKACCOUNT AS bankaccount", 
			"CLEARDATE AS cleardate", 
			"CHECK_NO AS check_no", 
			"CHECKDATE AS checkdate", 
			"AMOUNT AS amount", 
			"CHECKAMOUNT AS checkamount", 
			"BALANCE AS balance", 
			"PAID AS paid", 
			"DEBITS AS debits", 
			"CREDITS AS credits", 
			"CANCELLED AS cancelled", 
			"DISBURSED AS disbursed", 
			"POSTED AS posted", 
			"CHECKISSUED AS checkissued", 
			"EXPLAIN AS explain", 
			"CHECKPAYMENT AS checkpayment", 
			"INVOICESELECT AS invoiceselect", 
			"LOCKED AS locked", 
			"BRANCHCODE AS branchcode", 
			"DEPTCODE AS deptcode", 
			"REFNUMSUB AS refnumsub", 
			"MONTHSERIES AS monthseries", 
			"YEARSERIES AS yearseries", 
			"REFERENCE AS reference", 
			"MONTH AS month", 
			"YEAR AS year", 
			"BRNO AS brno", 
			"AGENTCODE AS agentcode", 
			"CUSTOMERNO AS customerno", 
			"PREPAREDBY AS preparedby", 
			"CHECKEDBY AS checkedby", 
			"APPROVEDBY AS approvedby", 
			"CASNO AS casno", 
			"RFPNO AS rfpno", 
			"RBSNO AS rbsno", 
			"LQFNO AS lqfno", 
			"SERFNO AS serfno", 
			"STATUS AS status", 
			"BANKID AS bankid", 
			"HQBRANCHDAYSALESID AS hqbranchdaysalesid", 
			"AP_AMOUNT AS ap_amount", 
			"CA_AMOUNT AS ca_amount", 
			"AP_CA AS ap_ca", 
			"COUNTERNO AS counterno", 
			"AUTHORIZEDBY AS authorizedby", 
			"ISPAYEESACCT AS ispayeesacct", 
			"COUNTERDATE AS counterdate", 
			"DIVISION AS division", 
			"COLLECTORID AS collectorid", 
			"EWTAX AS ewtax", 
			"BWTAX AS bwtax", 
			"WTAX AS wtax", 
			"VATABLESALES AS vatablesales", 
			"VATAMOUNT AS vatamount", 
			"VATEXEMPT AS vatexempt", 
			"ZERORATED AS zerorated", 
			"SCPWDDISCOUNT AS scpwddiscount", 
			"NETDUE AS netdue", 
			"NETAMOUNT AS netamount", 
			"TAXBASE AS taxbase" 
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
			"BOOKS AS books", 
			"GLTYPE AS gltype", 
			"EMPNO AS empno", 
			"SHIFT AS shift", 
			"POSNO AS posno", 
			"TURNOVERID AS turnoverid", 
			"REFNUM AS refnum", 
			"REFDATE AS refdate", 
			"DATE AS date", 
			"APV_NUMBER AS apv_number", 
			"SRRNUMBER AS srrnumber", 
			"TRANSACTIONTYPE AS transactiontype", 
			"INVOICENO AS invoiceno", 
			"ORDERNO AS orderno", 
			"SUPPCODE AS suppcode", 
			"PAYEE AS payee", 
			"PAYEETYPE AS payeetype", 
			"BANKNAME AS bankname", 
			"BANKACCOUNT AS bankaccount", 
			"CLEARDATE AS cleardate", 
			"CHECK_NO AS check_no", 
			"CHECKDATE AS checkdate", 
			"AMOUNT AS amount", 
			"CHECKAMOUNT AS checkamount", 
			"BALANCE AS balance", 
			"PAID AS paid", 
			"DEBITS AS debits", 
			"CREDITS AS credits", 
			"CANCELLED AS cancelled", 
			"DISBURSED AS disbursed", 
			"POSTED AS posted", 
			"CHECKISSUED AS checkissued", 
			"EXPLAIN AS explain", 
			"CHECKPAYMENT AS checkpayment", 
			"INVOICESELECT AS invoiceselect", 
			"LOCKED AS locked", 
			"BRANCHCODE AS branchcode", 
			"DEPTCODE AS deptcode", 
			"REFNUMSUB AS refnumsub", 
			"MONTHSERIES AS monthseries", 
			"YEARSERIES AS yearseries", 
			"REFERENCE AS reference", 
			"MONTH AS month", 
			"YEAR AS year", 
			"BRNO AS brno", 
			"AGENTCODE AS agentcode", 
			"CUSTOMERNO AS customerno", 
			"PREPAREDBY AS preparedby", 
			"CHECKEDBY AS checkedby", 
			"APPROVEDBY AS approvedby", 
			"CASNO AS casno", 
			"RFPNO AS rfpno", 
			"RBSNO AS rbsno", 
			"LQFNO AS lqfno", 
			"SERFNO AS serfno", 
			"STATUS AS status", 
			"BANKID AS bankid", 
			"HQBRANCHDAYSALESID AS hqbranchdaysalesid", 
			"AP_AMOUNT AS ap_amount", 
			"CA_AMOUNT AS ca_amount", 
			"AP_CA AS ap_ca", 
			"COUNTERNO AS counterno", 
			"AUTHORIZEDBY AS authorizedby", 
			"ISPAYEESACCT AS ispayeesacct", 
			"COUNTERDATE AS counterdate", 
			"DIVISION AS division", 
			"COLLECTORID AS collectorid", 
			"EWTAX AS ewtax", 
			"BWTAX AS bwtax", 
			"WTAX AS wtax", 
			"VATABLESALES AS vatablesales", 
			"VATAMOUNT AS vatamount", 
			"VATEXEMPT AS vatexempt", 
			"ZERORATED AS zerorated", 
			"SCPWDDISCOUNT AS scpwddiscount", 
			"NETDUE AS netdue", 
			"NETAMOUNT AS netamount", 
			"TAXBASE AS taxbase" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
