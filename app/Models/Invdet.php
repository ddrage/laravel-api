<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Invdet extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.invdet';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'ordnumunit';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["invdetno","invtype","regisno","invnum","ordnum","ordnumunit","acctcode","refdate","prodcode","partnum","unitcode","description","barcode","unitmeas","contents","qty","netprice","unitprice","totalamt","netamount","iffree","ifnet","discone","discount","warecode","binnumber","ifadj","ifexport","suppcode","catcode","personcode","yearno","monthno","areacode","invoicetype","division","originalprice","taxtype","ifvat","vatamount","vatableamt","vatexemptamt","zeroratedamt","iscancel","accountsgroup"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"INVDETNO AS invdetno", 
			"INVTYPE AS invtype", 
			"REGISNO AS regisno", 
			"INVNUM AS invnum", 
			"ORDNUM AS ordnum", 
			"ORDNUMUNIT AS ordnumunit", 
			"ACCTCODE AS acctcode", 
			"REFDATE AS refdate", 
			"PRODCODE AS prodcode", 
			"PARTNUM AS partnum", 
			"UNITCODE AS unitcode", 
			"DESCRIPTION AS description", 
			"BARCODE AS barcode", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"QTY AS qty", 
			"NETPRICE AS netprice", 
			"UNITPRICE AS unitprice", 
			"TOTALAMT AS totalamt", 
			"NETAMOUNT AS netamount", 
			"IFFREE AS iffree", 
			"IFNET AS ifnet", 
			"DISCONE AS discone", 
			"DISCOUNT AS discount", 
			"WARECODE AS warecode", 
			"BINNUMBER AS binnumber", 
			"IFADJ AS ifadj", 
			"IFEXPORT AS ifexport", 
			"SUPPCODE AS suppcode", 
			"CATCODE AS catcode", 
			"PERSONCODE AS personcode", 
			"YEARNO AS yearno", 
			"MONTHNO AS monthno", 
			"AREACODE AS areacode", 
			"INVOICETYPE AS invoicetype", 
			"DIVISION AS division", 
			"ORIGINALPRICE AS originalprice", 
			"TAXTYPE AS taxtype", 
			"IFVAT AS ifvat", 
			"VATAMOUNT AS vatamount", 
			"VATABLEAMT AS vatableamt", 
			"VATEXEMPTAMT AS vatexemptamt", 
			"ZERORATEDAMT AS zeroratedamt", 
			"ISCANCEL AS iscancel", 
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
			"INVDETNO AS invdetno", 
			"INVTYPE AS invtype", 
			"REGISNO AS regisno", 
			"INVNUM AS invnum", 
			"ORDNUM AS ordnum", 
			"ORDNUMUNIT AS ordnumunit", 
			"ACCTCODE AS acctcode", 
			"REFDATE AS refdate", 
			"PRODCODE AS prodcode", 
			"PARTNUM AS partnum", 
			"UNITCODE AS unitcode", 
			"DESCRIPTION AS description", 
			"BARCODE AS barcode", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"QTY AS qty", 
			"NETPRICE AS netprice", 
			"UNITPRICE AS unitprice", 
			"TOTALAMT AS totalamt", 
			"NETAMOUNT AS netamount", 
			"IFFREE AS iffree", 
			"IFNET AS ifnet", 
			"DISCONE AS discone", 
			"DISCOUNT AS discount", 
			"WARECODE AS warecode", 
			"BINNUMBER AS binnumber", 
			"IFADJ AS ifadj", 
			"IFEXPORT AS ifexport", 
			"SUPPCODE AS suppcode", 
			"CATCODE AS catcode", 
			"PERSONCODE AS personcode", 
			"YEARNO AS yearno", 
			"MONTHNO AS monthno", 
			"AREACODE AS areacode", 
			"INVOICETYPE AS invoicetype", 
			"DIVISION AS division", 
			"ORIGINALPRICE AS originalprice", 
			"TAXTYPE AS taxtype", 
			"IFVAT AS ifvat", 
			"VATAMOUNT AS vatamount", 
			"VATABLEAMT AS vatableamt", 
			"VATEXEMPTAMT AS vatexemptamt", 
			"ZERORATEDAMT AS zeroratedamt", 
			"ISCANCEL AS iscancel", 
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
			"INVDETNO AS invdetno", 
			"INVTYPE AS invtype", 
			"REGISNO AS regisno", 
			"INVNUM AS invnum", 
			"ORDNUM AS ordnum", 
			"ORDNUMUNIT AS ordnumunit", 
			"ACCTCODE AS acctcode", 
			"REFDATE AS refdate", 
			"PRODCODE AS prodcode", 
			"PARTNUM AS partnum", 
			"UNITCODE AS unitcode", 
			"DESCRIPTION AS description", 
			"BARCODE AS barcode", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"QTY AS qty", 
			"NETPRICE AS netprice", 
			"UNITPRICE AS unitprice", 
			"TOTALAMT AS totalamt", 
			"NETAMOUNT AS netamount", 
			"IFFREE AS iffree", 
			"IFNET AS ifnet", 
			"DISCONE AS discone", 
			"DISCOUNT AS discount", 
			"WARECODE AS warecode", 
			"BINNUMBER AS binnumber", 
			"IFADJ AS ifadj", 
			"IFEXPORT AS ifexport", 
			"SUPPCODE AS suppcode", 
			"CATCODE AS catcode", 
			"PERSONCODE AS personcode", 
			"YEARNO AS yearno", 
			"MONTHNO AS monthno", 
			"AREACODE AS areacode", 
			"INVOICETYPE AS invoicetype", 
			"DIVISION AS division", 
			"ORIGINALPRICE AS originalprice", 
			"TAXTYPE AS taxtype", 
			"IFVAT AS ifvat", 
			"VATAMOUNT AS vatamount", 
			"VATABLEAMT AS vatableamt", 
			"VATEXEMPTAMT AS vatexemptamt", 
			"ZERORATEDAMT AS zeroratedamt", 
			"ISCANCEL AS iscancel", 
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
			"INVDETNO AS invdetno", 
			"INVTYPE AS invtype", 
			"REGISNO AS regisno", 
			"INVNUM AS invnum", 
			"ORDNUM AS ordnum", 
			"ORDNUMUNIT AS ordnumunit", 
			"ACCTCODE AS acctcode", 
			"REFDATE AS refdate", 
			"PRODCODE AS prodcode", 
			"PARTNUM AS partnum", 
			"UNITCODE AS unitcode", 
			"DESCRIPTION AS description", 
			"BARCODE AS barcode", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"QTY AS qty", 
			"NETPRICE AS netprice", 
			"UNITPRICE AS unitprice", 
			"TOTALAMT AS totalamt", 
			"NETAMOUNT AS netamount", 
			"IFFREE AS iffree", 
			"IFNET AS ifnet", 
			"DISCONE AS discone", 
			"DISCOUNT AS discount", 
			"WARECODE AS warecode", 
			"BINNUMBER AS binnumber", 
			"IFADJ AS ifadj", 
			"IFEXPORT AS ifexport", 
			"SUPPCODE AS suppcode", 
			"CATCODE AS catcode", 
			"PERSONCODE AS personcode", 
			"YEARNO AS yearno", 
			"MONTHNO AS monthno", 
			"AREACODE AS areacode", 
			"INVOICETYPE AS invoicetype", 
			"DIVISION AS division", 
			"ORIGINALPRICE AS originalprice", 
			"TAXTYPE AS taxtype", 
			"IFVAT AS ifvat", 
			"VATAMOUNT AS vatamount", 
			"VATABLEAMT AS vatableamt", 
			"VATEXEMPTAMT AS vatexemptamt", 
			"ZERORATEDAMT AS zeroratedamt", 
			"ISCANCEL AS iscancel", 
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
			"INVDETNO AS invdetno", 
			"INVTYPE AS invtype", 
			"REGISNO AS regisno", 
			"INVNUM AS invnum", 
			"ORDNUM AS ordnum", 
			"ORDNUMUNIT AS ordnumunit", 
			"ACCTCODE AS acctcode", 
			"REFDATE AS refdate", 
			"PRODCODE AS prodcode", 
			"PARTNUM AS partnum", 
			"UNITCODE AS unitcode", 
			"DESCRIPTION AS description", 
			"BARCODE AS barcode", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"QTY AS qty", 
			"NETPRICE AS netprice", 
			"UNITPRICE AS unitprice", 
			"TOTALAMT AS totalamt", 
			"NETAMOUNT AS netamount", 
			"IFFREE AS iffree", 
			"IFNET AS ifnet", 
			"DISCONE AS discone", 
			"DISCOUNT AS discount", 
			"WARECODE AS warecode", 
			"BINNUMBER AS binnumber", 
			"IFADJ AS ifadj", 
			"IFEXPORT AS ifexport", 
			"SUPPCODE AS suppcode", 
			"CATCODE AS catcode", 
			"PERSONCODE AS personcode", 
			"YEARNO AS yearno", 
			"MONTHNO AS monthno", 
			"AREACODE AS areacode", 
			"INVOICETYPE AS invoicetype", 
			"DIVISION AS division", 
			"ORIGINALPRICE AS originalprice", 
			"TAXTYPE AS taxtype", 
			"IFVAT AS ifvat", 
			"VATAMOUNT AS vatamount", 
			"VATABLEAMT AS vatableamt", 
			"VATEXEMPTAMT AS vatexemptamt", 
			"ZERORATEDAMT AS zeroratedamt", 
			"ISCANCEL AS iscancel", 
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
