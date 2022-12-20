<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Breakdwn extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.BREAKDWN';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'trannum';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["glhid","refnum","refdate","acctcode","invoicedate","trannum","invoice","drnum","ornum","amount","amtpaid","balance","transtype","division","invoicetype","check","gltype","branch","ptrannum","ordnum","ordnumunit","ptype","txtype","taxtype","vatablesales","vatexempt","zerorated","vatamount","withewtax","withbwtax","taxdue","taxbase","discount","netdue","grossamt","netamount","taxpaid"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"GLHID AS glhid", 
			"REFNUM AS refnum", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"INVOICEDATE AS invoicedate", 
			"TRANNUM AS trannum", 
			"INVOICE AS invoice", 
			"DRNUM AS drnum", 
			"ORNUM AS ornum", 
			"AMOUNT AS amount", 
			"AMTPAID AS amtpaid", 
			"BALANCE AS balance", 
			"TRANSTYPE AS transtype", 
			"DIVISION AS division", 
			"INVOICETYPE AS invoicetype", 
			"CHECK AS check", 
			"GLTYPE AS gltype", 
			"BRANCH AS branch", 
			"PTRANNUM AS ptrannum", 
			"ORDNUM AS ordnum", 
			"ORDNUMUNIT AS ordnumunit", 
			"PTYPE AS ptype", 
			"TXTYPE AS txtype", 
			"TAXTYPE AS taxtype", 
			"VATABLESALES AS vatablesales", 
			"VATEXEMPT AS vatexempt", 
			"ZERORATED AS zerorated", 
			"VATAMOUNT AS vatamount", 
			"WITHEWTAX AS withewtax", 
			"WITHBWTAX AS withbwtax", 
			"TAXDUE AS taxdue", 
			"TAXBASE AS taxbase", 
			"DISCOUNT AS discount", 
			"NETDUE AS netdue", 
			"GROSSAMT AS grossamt", 
			"NETAMOUNT AS netamount", 
			"TAXPAID AS taxpaid" 
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
			"REFNUM AS refnum", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"INVOICEDATE AS invoicedate", 
			"TRANNUM AS trannum", 
			"INVOICE AS invoice", 
			"DRNUM AS drnum", 
			"ORNUM AS ornum", 
			"AMOUNT AS amount", 
			"AMTPAID AS amtpaid", 
			"BALANCE AS balance", 
			"TRANSTYPE AS transtype", 
			"DIVISION AS division", 
			"INVOICETYPE AS invoicetype", 
			"CHECK AS check", 
			"GLTYPE AS gltype", 
			"BRANCH AS branch", 
			"PTRANNUM AS ptrannum", 
			"ORDNUM AS ordnum", 
			"ORDNUMUNIT AS ordnumunit", 
			"PTYPE AS ptype", 
			"TXTYPE AS txtype", 
			"TAXTYPE AS taxtype", 
			"VATABLESALES AS vatablesales", 
			"VATEXEMPT AS vatexempt", 
			"ZERORATED AS zerorated", 
			"VATAMOUNT AS vatamount", 
			"WITHEWTAX AS withewtax", 
			"WITHBWTAX AS withbwtax", 
			"TAXDUE AS taxdue", 
			"TAXBASE AS taxbase", 
			"DISCOUNT AS discount", 
			"NETDUE AS netdue", 
			"GROSSAMT AS grossamt", 
			"NETAMOUNT AS netamount", 
			"TAXPAID AS taxpaid" 
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
			"REFNUM AS refnum", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"INVOICEDATE AS invoicedate", 
			"TRANNUM AS trannum", 
			"INVOICE AS invoice", 
			"DRNUM AS drnum", 
			"ORNUM AS ornum", 
			"AMOUNT AS amount", 
			"AMTPAID AS amtpaid", 
			"BALANCE AS balance", 
			"TRANSTYPE AS transtype", 
			"DIVISION AS division", 
			"INVOICETYPE AS invoicetype", 
			"CHECK AS check", 
			"GLTYPE AS gltype", 
			"BRANCH AS branch", 
			"PTRANNUM AS ptrannum", 
			"ORDNUM AS ordnum", 
			"ORDNUMUNIT AS ordnumunit", 
			"PTYPE AS ptype", 
			"TXTYPE AS txtype", 
			"TAXTYPE AS taxtype", 
			"VATABLESALES AS vatablesales", 
			"VATEXEMPT AS vatexempt", 
			"ZERORATED AS zerorated", 
			"VATAMOUNT AS vatamount", 
			"WITHEWTAX AS withewtax", 
			"WITHBWTAX AS withbwtax", 
			"TAXDUE AS taxdue", 
			"TAXBASE AS taxbase", 
			"DISCOUNT AS discount", 
			"NETDUE AS netdue", 
			"GROSSAMT AS grossamt", 
			"NETAMOUNT AS netamount", 
			"TAXPAID AS taxpaid" 
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
			"REFNUM AS refnum", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"INVOICEDATE AS invoicedate", 
			"TRANNUM AS trannum", 
			"INVOICE AS invoice", 
			"DRNUM AS drnum", 
			"ORNUM AS ornum", 
			"AMOUNT AS amount", 
			"AMTPAID AS amtpaid", 
			"BALANCE AS balance", 
			"TRANSTYPE AS transtype", 
			"DIVISION AS division", 
			"INVOICETYPE AS invoicetype", 
			"CHECK AS check", 
			"GLTYPE AS gltype", 
			"BRANCH AS branch", 
			"PTRANNUM AS ptrannum", 
			"ORDNUM AS ordnum", 
			"ORDNUMUNIT AS ordnumunit", 
			"PTYPE AS ptype", 
			"TXTYPE AS txtype", 
			"TAXTYPE AS taxtype", 
			"VATABLESALES AS vatablesales", 
			"VATEXEMPT AS vatexempt", 
			"ZERORATED AS zerorated", 
			"VATAMOUNT AS vatamount", 
			"WITHEWTAX AS withewtax", 
			"WITHBWTAX AS withbwtax", 
			"TAXDUE AS taxdue", 
			"TAXBASE AS taxbase", 
			"DISCOUNT AS discount", 
			"NETDUE AS netdue", 
			"GROSSAMT AS grossamt", 
			"NETAMOUNT AS netamount", 
			"TAXPAID AS taxpaid" 
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
			"REFNUM AS refnum", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"INVOICEDATE AS invoicedate", 
			"TRANNUM AS trannum", 
			"INVOICE AS invoice", 
			"DRNUM AS drnum", 
			"ORNUM AS ornum", 
			"AMOUNT AS amount", 
			"AMTPAID AS amtpaid", 
			"BALANCE AS balance", 
			"TRANSTYPE AS transtype", 
			"DIVISION AS division", 
			"INVOICETYPE AS invoicetype", 
			"CHECK AS check", 
			"GLTYPE AS gltype", 
			"BRANCH AS branch", 
			"PTRANNUM AS ptrannum", 
			"ORDNUM AS ordnum", 
			"ORDNUMUNIT AS ordnumunit", 
			"PTYPE AS ptype", 
			"TXTYPE AS txtype", 
			"TAXTYPE AS taxtype", 
			"VATABLESALES AS vatablesales", 
			"VATEXEMPT AS vatexempt", 
			"ZERORATED AS zerorated", 
			"VATAMOUNT AS vatamount", 
			"WITHEWTAX AS withewtax", 
			"WITHBWTAX AS withbwtax", 
			"TAXDUE AS taxdue", 
			"TAXBASE AS taxbase", 
			"DISCOUNT AS discount", 
			"NETDUE AS netdue", 
			"GROSSAMT AS grossamt", 
			"NETAMOUNT AS netamount", 
			"TAXPAID AS taxpaid" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
