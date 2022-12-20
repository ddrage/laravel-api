<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Stkcard extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.stkcard';
	

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
	protected $fillable = ["trantype","trannum","tranno","linenum","transcode","codetype","trandate","yearno","monthno","prodcode","catcode","unitcode","description","thisfree","partnum","prodinstall","serinstall","descinstall","acctcode","areacode","debitqty","creditqty","produnit","prodcontents","begbal","debit","credit","runbal","quantity","oldbal","unitcost","smallcost","avecost","oldave","currcost","withserial","withbarcode","expqty","currency","ponum","unitmeas","purunit","contents","realcontents","remarks","procok","retqty","balance","othertype","othernum","otheracctcode","otherprodcode","otherponum","netprice","unitprice","ifnet","ifvat","iffree","warecode","warebeg","warebal","binnumber","invoiceno","posted","innerunit","innercont","expiration","division","uom","converted","quantitym","quantityp","smallum","amount","saleprice","saleum","saleucode","iscancel","invresetdate"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"TRANTYPE AS trantype", 
			"TRANNUM AS trannum", 
			"TRANNO AS tranno", 
			"LINENUM AS linenum", 
			"TRANSCODE AS transcode", 
			"CODETYPE AS codetype", 
			"TRANDATE AS trandate", 
			"YEARNO AS yearno", 
			"MONTHNO AS monthno", 
			"PRODCODE AS prodcode", 
			"CATCODE AS catcode", 
			"UNITCODE AS unitcode", 
			"DESCRIPTION AS description", 
			"THISFREE AS thisfree", 
			"PARTNUM AS partnum", 
			"PRODINSTALL AS prodinstall", 
			"SERINSTALL AS serinstall", 
			"DESCINSTALL AS descinstall", 
			"ACCTCODE AS acctcode", 
			"AREACODE AS areacode", 
			"DEBITQTY AS debitqty", 
			"CREDITQTY AS creditqty", 
			"PRODUNIT AS produnit", 
			"PRODCONTENTS AS prodcontents", 
			"BEGBAL AS begbal", 
			"DEBIT AS debit", 
			"CREDIT AS credit", 
			"RUNBAL AS runbal", 
			"QUANTITY AS quantity", 
			"OLDBAL AS oldbal", 
			"UNITCOST AS unitcost", 
			"SMALLCOST AS smallcost", 
			"AVECOST AS avecost", 
			"OLDAVE AS oldave", 
			"CURRCOST AS currcost", 
			"WITHSERIAL AS withserial", 
			"WITHBARCODE AS withbarcode", 
			"EXPQTY AS expqty", 
			"CURRENCY AS currency", 
			"PONUM AS ponum", 
			"UNITMEAS AS unitmeas", 
			"PURUNIT AS purunit", 
			"CONTENTS AS contents", 
			"REALCONTENTS AS realcontents", 
			"REMARKS AS remarks", 
			"PROCOK AS procok", 
			"RETQTY AS retqty", 
			"BALANCE AS balance", 
			"OTHERTYPE AS othertype", 
			"OTHERNUM AS othernum", 
			"OTHERACCTCODE AS otheracctcode", 
			"OTHERPRODCODE AS otherprodcode", 
			"OTHERPONUM AS otherponum", 
			"NETPRICE AS netprice", 
			"UNITPRICE AS unitprice", 
			"IFNET AS ifnet", 
			"IFVAT AS ifvat", 
			"IFFREE AS iffree", 
			"WARECODE AS warecode", 
			"WAREBEG AS warebeg", 
			"WAREBAL AS warebal", 
			"BINNUMBER AS binnumber", 
			"INVOICENO AS invoiceno", 
			"POSTED AS posted", 
			"INNERUNIT AS innerunit", 
			"INNERCONT AS innercont", 
			"EXPIRATION AS expiration", 
			"DIVISION AS division", 
			"UOM AS uom", 
			"CONVERTED AS converted", 
			"QUANTITYM AS quantitym", 
			"QUANTITYP AS quantityp", 
			"SMALLUM AS smallum", 
			"AMOUNT AS amount", 
			"SALEPRICE AS saleprice", 
			"SALEUM AS saleum", 
			"SALEUCODE AS saleucode", 
			"ISCANCEL AS iscancel", 
			"INVRESETDATE AS invresetdate" 
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
			"TRANNO AS tranno", 
			"LINENUM AS linenum", 
			"TRANSCODE AS transcode", 
			"CODETYPE AS codetype", 
			"TRANDATE AS trandate", 
			"YEARNO AS yearno", 
			"MONTHNO AS monthno", 
			"PRODCODE AS prodcode", 
			"CATCODE AS catcode", 
			"UNITCODE AS unitcode", 
			"DESCRIPTION AS description", 
			"THISFREE AS thisfree", 
			"PARTNUM AS partnum", 
			"PRODINSTALL AS prodinstall", 
			"SERINSTALL AS serinstall", 
			"DESCINSTALL AS descinstall", 
			"ACCTCODE AS acctcode", 
			"AREACODE AS areacode", 
			"DEBITQTY AS debitqty", 
			"CREDITQTY AS creditqty", 
			"PRODUNIT AS produnit", 
			"PRODCONTENTS AS prodcontents", 
			"BEGBAL AS begbal", 
			"DEBIT AS debit", 
			"CREDIT AS credit", 
			"RUNBAL AS runbal", 
			"QUANTITY AS quantity", 
			"OLDBAL AS oldbal", 
			"UNITCOST AS unitcost", 
			"SMALLCOST AS smallcost", 
			"AVECOST AS avecost", 
			"OLDAVE AS oldave", 
			"CURRCOST AS currcost", 
			"WITHSERIAL AS withserial", 
			"WITHBARCODE AS withbarcode", 
			"EXPQTY AS expqty", 
			"CURRENCY AS currency", 
			"PONUM AS ponum", 
			"UNITMEAS AS unitmeas", 
			"PURUNIT AS purunit", 
			"CONTENTS AS contents", 
			"REALCONTENTS AS realcontents", 
			"REMARKS AS remarks", 
			"PROCOK AS procok", 
			"RETQTY AS retqty", 
			"BALANCE AS balance", 
			"OTHERTYPE AS othertype", 
			"OTHERNUM AS othernum", 
			"OTHERACCTCODE AS otheracctcode", 
			"OTHERPRODCODE AS otherprodcode", 
			"OTHERPONUM AS otherponum", 
			"NETPRICE AS netprice", 
			"UNITPRICE AS unitprice", 
			"IFNET AS ifnet", 
			"IFVAT AS ifvat", 
			"IFFREE AS iffree", 
			"WARECODE AS warecode", 
			"WAREBEG AS warebeg", 
			"WAREBAL AS warebal", 
			"BINNUMBER AS binnumber", 
			"INVOICENO AS invoiceno", 
			"POSTED AS posted", 
			"INNERUNIT AS innerunit", 
			"INNERCONT AS innercont", 
			"EXPIRATION AS expiration", 
			"DIVISION AS division", 
			"UOM AS uom", 
			"CONVERTED AS converted", 
			"QUANTITYM AS quantitym", 
			"QUANTITYP AS quantityp", 
			"SMALLUM AS smallum", 
			"AMOUNT AS amount", 
			"SALEPRICE AS saleprice", 
			"SALEUM AS saleum", 
			"SALEUCODE AS saleucode", 
			"ISCANCEL AS iscancel", 
			"INVRESETDATE AS invresetdate" 
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
			"TRANNO AS tranno", 
			"LINENUM AS linenum", 
			"TRANSCODE AS transcode", 
			"CODETYPE AS codetype", 
			"TRANDATE AS trandate", 
			"YEARNO AS yearno", 
			"MONTHNO AS monthno", 
			"PRODCODE AS prodcode", 
			"CATCODE AS catcode", 
			"UNITCODE AS unitcode", 
			"DESCRIPTION AS description", 
			"THISFREE AS thisfree", 
			"PARTNUM AS partnum", 
			"PRODINSTALL AS prodinstall", 
			"SERINSTALL AS serinstall", 
			"DESCINSTALL AS descinstall", 
			"ACCTCODE AS acctcode", 
			"AREACODE AS areacode", 
			"DEBITQTY AS debitqty", 
			"CREDITQTY AS creditqty", 
			"PRODUNIT AS produnit", 
			"PRODCONTENTS AS prodcontents", 
			"BEGBAL AS begbal", 
			"DEBIT AS debit", 
			"CREDIT AS credit", 
			"RUNBAL AS runbal", 
			"QUANTITY AS quantity", 
			"OLDBAL AS oldbal", 
			"UNITCOST AS unitcost", 
			"SMALLCOST AS smallcost", 
			"AVECOST AS avecost", 
			"OLDAVE AS oldave", 
			"CURRCOST AS currcost", 
			"WITHSERIAL AS withserial", 
			"WITHBARCODE AS withbarcode", 
			"EXPQTY AS expqty", 
			"CURRENCY AS currency", 
			"PONUM AS ponum", 
			"UNITMEAS AS unitmeas", 
			"PURUNIT AS purunit", 
			"CONTENTS AS contents", 
			"REALCONTENTS AS realcontents", 
			"REMARKS AS remarks", 
			"PROCOK AS procok", 
			"RETQTY AS retqty", 
			"BALANCE AS balance", 
			"OTHERTYPE AS othertype", 
			"OTHERNUM AS othernum", 
			"OTHERACCTCODE AS otheracctcode", 
			"OTHERPRODCODE AS otherprodcode", 
			"OTHERPONUM AS otherponum", 
			"NETPRICE AS netprice", 
			"UNITPRICE AS unitprice", 
			"IFNET AS ifnet", 
			"IFVAT AS ifvat", 
			"IFFREE AS iffree", 
			"WARECODE AS warecode", 
			"WAREBEG AS warebeg", 
			"WAREBAL AS warebal", 
			"BINNUMBER AS binnumber", 
			"INVOICENO AS invoiceno", 
			"POSTED AS posted", 
			"INNERUNIT AS innerunit", 
			"INNERCONT AS innercont", 
			"EXPIRATION AS expiration", 
			"DIVISION AS division", 
			"UOM AS uom", 
			"CONVERTED AS converted", 
			"QUANTITYM AS quantitym", 
			"QUANTITYP AS quantityp", 
			"SMALLUM AS smallum", 
			"AMOUNT AS amount", 
			"SALEPRICE AS saleprice", 
			"SALEUM AS saleum", 
			"SALEUCODE AS saleucode", 
			"ISCANCEL AS iscancel", 
			"INVRESETDATE AS invresetdate" 
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
			"TRANNO AS tranno", 
			"LINENUM AS linenum", 
			"TRANSCODE AS transcode", 
			"CODETYPE AS codetype", 
			"TRANDATE AS trandate", 
			"YEARNO AS yearno", 
			"MONTHNO AS monthno", 
			"PRODCODE AS prodcode", 
			"CATCODE AS catcode", 
			"UNITCODE AS unitcode", 
			"DESCRIPTION AS description", 
			"THISFREE AS thisfree", 
			"PARTNUM AS partnum", 
			"PRODINSTALL AS prodinstall", 
			"SERINSTALL AS serinstall", 
			"DESCINSTALL AS descinstall", 
			"ACCTCODE AS acctcode", 
			"AREACODE AS areacode", 
			"DEBITQTY AS debitqty", 
			"CREDITQTY AS creditqty", 
			"PRODUNIT AS produnit", 
			"PRODCONTENTS AS prodcontents", 
			"BEGBAL AS begbal", 
			"DEBIT AS debit", 
			"CREDIT AS credit", 
			"RUNBAL AS runbal", 
			"QUANTITY AS quantity", 
			"OLDBAL AS oldbal", 
			"UNITCOST AS unitcost", 
			"SMALLCOST AS smallcost", 
			"AVECOST AS avecost", 
			"OLDAVE AS oldave", 
			"CURRCOST AS currcost", 
			"WITHSERIAL AS withserial", 
			"WITHBARCODE AS withbarcode", 
			"EXPQTY AS expqty", 
			"CURRENCY AS currency", 
			"PONUM AS ponum", 
			"UNITMEAS AS unitmeas", 
			"PURUNIT AS purunit", 
			"CONTENTS AS contents", 
			"REALCONTENTS AS realcontents", 
			"REMARKS AS remarks", 
			"PROCOK AS procok", 
			"RETQTY AS retqty", 
			"BALANCE AS balance", 
			"OTHERTYPE AS othertype", 
			"OTHERNUM AS othernum", 
			"OTHERACCTCODE AS otheracctcode", 
			"OTHERPRODCODE AS otherprodcode", 
			"OTHERPONUM AS otherponum", 
			"NETPRICE AS netprice", 
			"UNITPRICE AS unitprice", 
			"IFNET AS ifnet", 
			"IFVAT AS ifvat", 
			"IFFREE AS iffree", 
			"WARECODE AS warecode", 
			"WAREBEG AS warebeg", 
			"WAREBAL AS warebal", 
			"BINNUMBER AS binnumber", 
			"INVOICENO AS invoiceno", 
			"POSTED AS posted", 
			"INNERUNIT AS innerunit", 
			"INNERCONT AS innercont", 
			"EXPIRATION AS expiration", 
			"DIVISION AS division", 
			"UOM AS uom", 
			"CONVERTED AS converted", 
			"QUANTITYM AS quantitym", 
			"QUANTITYP AS quantityp", 
			"SMALLUM AS smallum", 
			"AMOUNT AS amount", 
			"SALEPRICE AS saleprice", 
			"SALEUM AS saleum", 
			"SALEUCODE AS saleucode", 
			"ISCANCEL AS iscancel", 
			"INVRESETDATE AS invresetdate" 
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
			"TRANNO AS tranno", 
			"LINENUM AS linenum", 
			"TRANSCODE AS transcode", 
			"CODETYPE AS codetype", 
			"TRANDATE AS trandate", 
			"YEARNO AS yearno", 
			"MONTHNO AS monthno", 
			"PRODCODE AS prodcode", 
			"CATCODE AS catcode", 
			"UNITCODE AS unitcode", 
			"DESCRIPTION AS description", 
			"THISFREE AS thisfree", 
			"PARTNUM AS partnum", 
			"PRODINSTALL AS prodinstall", 
			"SERINSTALL AS serinstall", 
			"DESCINSTALL AS descinstall", 
			"ACCTCODE AS acctcode", 
			"AREACODE AS areacode", 
			"DEBITQTY AS debitqty", 
			"CREDITQTY AS creditqty", 
			"PRODUNIT AS produnit", 
			"PRODCONTENTS AS prodcontents", 
			"BEGBAL AS begbal", 
			"DEBIT AS debit", 
			"CREDIT AS credit", 
			"RUNBAL AS runbal", 
			"QUANTITY AS quantity", 
			"OLDBAL AS oldbal", 
			"UNITCOST AS unitcost", 
			"SMALLCOST AS smallcost", 
			"AVECOST AS avecost", 
			"OLDAVE AS oldave", 
			"CURRCOST AS currcost", 
			"WITHSERIAL AS withserial", 
			"WITHBARCODE AS withbarcode", 
			"EXPQTY AS expqty", 
			"CURRENCY AS currency", 
			"PONUM AS ponum", 
			"UNITMEAS AS unitmeas", 
			"PURUNIT AS purunit", 
			"CONTENTS AS contents", 
			"REALCONTENTS AS realcontents", 
			"REMARKS AS remarks", 
			"PROCOK AS procok", 
			"RETQTY AS retqty", 
			"BALANCE AS balance", 
			"OTHERTYPE AS othertype", 
			"OTHERNUM AS othernum", 
			"OTHERACCTCODE AS otheracctcode", 
			"OTHERPRODCODE AS otherprodcode", 
			"OTHERPONUM AS otherponum", 
			"NETPRICE AS netprice", 
			"UNITPRICE AS unitprice", 
			"IFNET AS ifnet", 
			"IFVAT AS ifvat", 
			"IFFREE AS iffree", 
			"WARECODE AS warecode", 
			"WAREBEG AS warebeg", 
			"WAREBAL AS warebal", 
			"BINNUMBER AS binnumber", 
			"INVOICENO AS invoiceno", 
			"POSTED AS posted", 
			"INNERUNIT AS innerunit", 
			"INNERCONT AS innercont", 
			"EXPIRATION AS expiration", 
			"DIVISION AS division", 
			"UOM AS uom", 
			"CONVERTED AS converted", 
			"QUANTITYM AS quantitym", 
			"QUANTITYP AS quantityp", 
			"SMALLUM AS smallum", 
			"AMOUNT AS amount", 
			"SALEPRICE AS saleprice", 
			"SALEUM AS saleum", 
			"SALEUCODE AS saleucode", 
			"ISCANCEL AS iscancel", 
			"INVRESETDATE AS invresetdate" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
