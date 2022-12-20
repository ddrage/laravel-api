<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Sordet extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.sordet';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'linenum';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["trantype","trannum","referenceno","ordnum","linenum","refdate","prodcode","partnum","catcode","unitcode","thisfree","description","barcode","prodtype","unitmeas","contents","batchcode","invnum","ordqty","resqty","svdqty","qtypick","unitcost","unitprice","netprice","acctcode","ifnet","iffree","totalcost","regisno","discone","discount","discamt","dischead","finishdate","finishtime","status","warecode","binnumber","servedqty","servedamt","remarks","retqty","balqty","areacode","suppcode","recqty","recbalance","yearno","monthno","personcode","division","originalprice","taxtype","ifvat","vatamount","vatableamt","vatexemptamt","zeroratedamt","accountsgroup"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"TRANTYPE AS trantype", 
			"TRANNUM AS trannum", 
			"REFERENCENO AS referenceno", 
			"ORDNUM AS ordnum", 
			"LINENUM AS linenum", 
			"REFDATE AS refdate", 
			"PRODCODE AS prodcode", 
			"PARTNUM AS partnum", 
			"CATCODE AS catcode", 
			"UNITCODE AS unitcode", 
			"THISFREE AS thisfree", 
			"DESCRIPTION AS description", 
			"BARCODE AS barcode", 
			"PRODTYPE AS prodtype", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"BATCHCODE AS batchcode", 
			"INVNUM AS invnum", 
			"ORDQTY AS ordqty", 
			"RESQTY AS resqty", 
			"SVDQTY AS svdqty", 
			"QTYPICK AS qtypick", 
			"UNITCOST AS unitcost", 
			"UNITPRICE AS unitprice", 
			"NETPRICE AS netprice", 
			"ACCTCODE AS acctcode", 
			"IFNET AS ifnet", 
			"IFFREE AS iffree", 
			"TOTALCOST AS totalcost", 
			"REGISNO AS regisno", 
			"DISCONE AS discone", 
			"DISCOUNT AS discount", 
			"DISCAMT AS discamt", 
			"DISCHEAD AS dischead", 
			"FINISHDATE AS finishdate", 
			"FINISHTIME AS finishtime", 
			"STATUS AS status", 
			"WARECODE AS warecode", 
			"BINNUMBER AS binnumber", 
			"SERVEDQTY AS servedqty", 
			"SERVEDAMT AS servedamt", 
			"REMARKS AS remarks", 
			"RETQTY AS retqty", 
			"BALQTY AS balqty", 
			"AREACODE AS areacode", 
			"SUPPCODE AS suppcode", 
			"RECQTY AS recqty", 
			"RECBALANCE AS recbalance", 
			"YEARNO AS yearno", 
			"MONTHNO AS monthno", 
			"PERSONCODE AS personcode", 
			"DIVISION AS division", 
			"ORIGINALPRICE AS originalprice", 
			"TAXTYPE AS taxtype", 
			"IFVAT AS ifvat", 
			"VATAMOUNT AS vatamount", 
			"VATABLEAMT AS vatableamt", 
			"VATEXEMPTAMT AS vatexemptamt", 
			"ZERORATEDAMT AS zeroratedamt", 
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
			"TRANTYPE AS trantype", 
			"TRANNUM AS trannum", 
			"REFERENCENO AS referenceno", 
			"ORDNUM AS ordnum", 
			"LINENUM AS linenum", 
			"REFDATE AS refdate", 
			"PRODCODE AS prodcode", 
			"PARTNUM AS partnum", 
			"CATCODE AS catcode", 
			"UNITCODE AS unitcode", 
			"THISFREE AS thisfree", 
			"DESCRIPTION AS description", 
			"BARCODE AS barcode", 
			"PRODTYPE AS prodtype", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"BATCHCODE AS batchcode", 
			"INVNUM AS invnum", 
			"ORDQTY AS ordqty", 
			"RESQTY AS resqty", 
			"SVDQTY AS svdqty", 
			"QTYPICK AS qtypick", 
			"UNITCOST AS unitcost", 
			"UNITPRICE AS unitprice", 
			"NETPRICE AS netprice", 
			"ACCTCODE AS acctcode", 
			"IFNET AS ifnet", 
			"IFFREE AS iffree", 
			"TOTALCOST AS totalcost", 
			"REGISNO AS regisno", 
			"DISCONE AS discone", 
			"DISCOUNT AS discount", 
			"DISCAMT AS discamt", 
			"DISCHEAD AS dischead", 
			"FINISHDATE AS finishdate", 
			"FINISHTIME AS finishtime", 
			"STATUS AS status", 
			"WARECODE AS warecode", 
			"BINNUMBER AS binnumber", 
			"SERVEDQTY AS servedqty", 
			"SERVEDAMT AS servedamt", 
			"REMARKS AS remarks", 
			"RETQTY AS retqty", 
			"BALQTY AS balqty", 
			"AREACODE AS areacode", 
			"SUPPCODE AS suppcode", 
			"RECQTY AS recqty", 
			"RECBALANCE AS recbalance", 
			"YEARNO AS yearno", 
			"MONTHNO AS monthno", 
			"PERSONCODE AS personcode", 
			"DIVISION AS division", 
			"ORIGINALPRICE AS originalprice", 
			"TAXTYPE AS taxtype", 
			"IFVAT AS ifvat", 
			"VATAMOUNT AS vatamount", 
			"VATABLEAMT AS vatableamt", 
			"VATEXEMPTAMT AS vatexemptamt", 
			"ZERORATEDAMT AS zeroratedamt", 
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
			"TRANTYPE AS trantype", 
			"TRANNUM AS trannum", 
			"REFERENCENO AS referenceno", 
			"ORDNUM AS ordnum", 
			"LINENUM AS linenum", 
			"REFDATE AS refdate", 
			"PRODCODE AS prodcode", 
			"PARTNUM AS partnum", 
			"CATCODE AS catcode", 
			"UNITCODE AS unitcode", 
			"THISFREE AS thisfree", 
			"DESCRIPTION AS description", 
			"BARCODE AS barcode", 
			"PRODTYPE AS prodtype", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"BATCHCODE AS batchcode", 
			"INVNUM AS invnum", 
			"ORDQTY AS ordqty", 
			"RESQTY AS resqty", 
			"SVDQTY AS svdqty", 
			"QTYPICK AS qtypick", 
			"UNITCOST AS unitcost", 
			"UNITPRICE AS unitprice", 
			"NETPRICE AS netprice", 
			"ACCTCODE AS acctcode", 
			"IFNET AS ifnet", 
			"IFFREE AS iffree", 
			"TOTALCOST AS totalcost", 
			"REGISNO AS regisno", 
			"DISCONE AS discone", 
			"DISCOUNT AS discount", 
			"DISCAMT AS discamt", 
			"DISCHEAD AS dischead", 
			"FINISHDATE AS finishdate", 
			"FINISHTIME AS finishtime", 
			"STATUS AS status", 
			"WARECODE AS warecode", 
			"BINNUMBER AS binnumber", 
			"SERVEDQTY AS servedqty", 
			"SERVEDAMT AS servedamt", 
			"REMARKS AS remarks", 
			"RETQTY AS retqty", 
			"BALQTY AS balqty", 
			"AREACODE AS areacode", 
			"SUPPCODE AS suppcode", 
			"RECQTY AS recqty", 
			"RECBALANCE AS recbalance", 
			"YEARNO AS yearno", 
			"MONTHNO AS monthno", 
			"PERSONCODE AS personcode", 
			"DIVISION AS division", 
			"ORIGINALPRICE AS originalprice", 
			"TAXTYPE AS taxtype", 
			"IFVAT AS ifvat", 
			"VATAMOUNT AS vatamount", 
			"VATABLEAMT AS vatableamt", 
			"VATEXEMPTAMT AS vatexemptamt", 
			"ZERORATEDAMT AS zeroratedamt", 
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
			"TRANTYPE AS trantype", 
			"TRANNUM AS trannum", 
			"REFERENCENO AS referenceno", 
			"ORDNUM AS ordnum", 
			"LINENUM AS linenum", 
			"REFDATE AS refdate", 
			"PRODCODE AS prodcode", 
			"PARTNUM AS partnum", 
			"CATCODE AS catcode", 
			"UNITCODE AS unitcode", 
			"THISFREE AS thisfree", 
			"DESCRIPTION AS description", 
			"BARCODE AS barcode", 
			"PRODTYPE AS prodtype", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"BATCHCODE AS batchcode", 
			"INVNUM AS invnum", 
			"ORDQTY AS ordqty", 
			"RESQTY AS resqty", 
			"SVDQTY AS svdqty", 
			"QTYPICK AS qtypick", 
			"UNITCOST AS unitcost", 
			"UNITPRICE AS unitprice", 
			"NETPRICE AS netprice", 
			"ACCTCODE AS acctcode", 
			"IFNET AS ifnet", 
			"IFFREE AS iffree", 
			"TOTALCOST AS totalcost", 
			"REGISNO AS regisno", 
			"DISCONE AS discone", 
			"DISCOUNT AS discount", 
			"DISCAMT AS discamt", 
			"DISCHEAD AS dischead", 
			"FINISHDATE AS finishdate", 
			"FINISHTIME AS finishtime", 
			"STATUS AS status", 
			"WARECODE AS warecode", 
			"BINNUMBER AS binnumber", 
			"SERVEDQTY AS servedqty", 
			"SERVEDAMT AS servedamt", 
			"REMARKS AS remarks", 
			"RETQTY AS retqty", 
			"BALQTY AS balqty", 
			"AREACODE AS areacode", 
			"SUPPCODE AS suppcode", 
			"RECQTY AS recqty", 
			"RECBALANCE AS recbalance", 
			"YEARNO AS yearno", 
			"MONTHNO AS monthno", 
			"PERSONCODE AS personcode", 
			"DIVISION AS division", 
			"ORIGINALPRICE AS originalprice", 
			"TAXTYPE AS taxtype", 
			"IFVAT AS ifvat", 
			"VATAMOUNT AS vatamount", 
			"VATABLEAMT AS vatableamt", 
			"VATEXEMPTAMT AS vatexemptamt", 
			"ZERORATEDAMT AS zeroratedamt", 
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
			"TRANTYPE AS trantype", 
			"TRANNUM AS trannum", 
			"REFERENCENO AS referenceno", 
			"ORDNUM AS ordnum", 
			"LINENUM AS linenum", 
			"REFDATE AS refdate", 
			"PRODCODE AS prodcode", 
			"PARTNUM AS partnum", 
			"CATCODE AS catcode", 
			"UNITCODE AS unitcode", 
			"THISFREE AS thisfree", 
			"DESCRIPTION AS description", 
			"BARCODE AS barcode", 
			"PRODTYPE AS prodtype", 
			"UNITMEAS AS unitmeas", 
			"CONTENTS AS contents", 
			"BATCHCODE AS batchcode", 
			"INVNUM AS invnum", 
			"ORDQTY AS ordqty", 
			"RESQTY AS resqty", 
			"SVDQTY AS svdqty", 
			"QTYPICK AS qtypick", 
			"UNITCOST AS unitcost", 
			"UNITPRICE AS unitprice", 
			"NETPRICE AS netprice", 
			"ACCTCODE AS acctcode", 
			"IFNET AS ifnet", 
			"IFFREE AS iffree", 
			"TOTALCOST AS totalcost", 
			"REGISNO AS regisno", 
			"DISCONE AS discone", 
			"DISCOUNT AS discount", 
			"DISCAMT AS discamt", 
			"DISCHEAD AS dischead", 
			"FINISHDATE AS finishdate", 
			"FINISHTIME AS finishtime", 
			"STATUS AS status", 
			"WARECODE AS warecode", 
			"BINNUMBER AS binnumber", 
			"SERVEDQTY AS servedqty", 
			"SERVEDAMT AS servedamt", 
			"REMARKS AS remarks", 
			"RETQTY AS retqty", 
			"BALQTY AS balqty", 
			"AREACODE AS areacode", 
			"SUPPCODE AS suppcode", 
			"RECQTY AS recqty", 
			"RECBALANCE AS recbalance", 
			"YEARNO AS yearno", 
			"MONTHNO AS monthno", 
			"PERSONCODE AS personcode", 
			"DIVISION AS division", 
			"ORIGINALPRICE AS originalprice", 
			"TAXTYPE AS taxtype", 
			"IFVAT AS ifvat", 
			"VATAMOUNT AS vatamount", 
			"VATABLEAMT AS vatableamt", 
			"VATEXEMPTAMT AS vatexemptamt", 
			"ZERORATEDAMT AS zeroratedamt", 
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
