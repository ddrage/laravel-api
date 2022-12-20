<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Accounts1 extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.accounts1';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = '';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["acctcode","acctname","billto","lastname","firstname","mi","areacode","accttype","contact","telnum","purchase","payment","puradjdb","puradjcr","balance","sales","salepay","saleadjdb","saleadjcr","salebal","overpay","orderamt","uncleared","creditlimit","taxtype","withvat","terms","discone","disctwo","discthree","discfour","baseacct","ifbase","creditstatus","newcode","newtype","interest","indays","status","address","deliverycharge","tin","buscode","faxnum","distcode","visit","tradechan","consumerchan","subconsumerchan","nielsenarea","indirect","custcode","country","city","state","zip","kraftcustomer","paddress","pdistributor","distributor","location_type","surcharge","username","password","token","isinstitutional","salesmancode","salesmanname","isewtax","ewtaxrate","accountsgroup","isbwtax","bwtaxrate"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				LOCATION_TYPE LIKE ?  OR 
				USERNAME LIKE ?  OR 
				PASSWORD LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%"
		];
		//setting search conditions
		$query->whereRaw($search_condition, $search_params);
	}
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"ACCTCODE AS acctcode", 
			"ACCTNAME AS acctname", 
			"BILLTO AS billto", 
			"LASTNAME AS lastname", 
			"FIRSTNAME AS firstname", 
			"MI AS mi", 
			"AREACODE AS areacode", 
			"ACCTTYPE AS accttype", 
			"CONTACT AS contact", 
			"TELNUM AS telnum", 
			"PURCHASE AS purchase", 
			"PAYMENT AS payment", 
			"PURADJDB AS puradjdb", 
			"PURADJCR AS puradjcr", 
			"BALANCE AS balance", 
			"SALES AS sales", 
			"SALEPAY AS salepay", 
			"SALEADJDB AS saleadjdb", 
			"SALEADJCR AS saleadjcr", 
			"SALEBAL AS salebal", 
			"OVERPAY AS overpay", 
			"ORDERAMT AS orderamt", 
			"UNCLEARED AS uncleared", 
			"CREDITLIMIT AS creditlimit", 
			"TAXTYPE AS taxtype", 
			"WITHVAT AS withvat", 
			"TERMS AS terms", 
			"DISCONE AS discone", 
			"DISCTWO AS disctwo", 
			"DISCTHREE AS discthree", 
			"DISCFOUR AS discfour", 
			"BASEACCT AS baseacct", 
			"IFBASE AS ifbase", 
			"CREDITSTATUS AS creditstatus", 
			"NEWCODE AS newcode", 
			"NEWTYPE AS newtype", 
			"INTEREST AS interest", 
			"INDAYS AS indays", 
			"STATUS AS status", 
			"ADDRESS AS address", 
			"DELIVERYCHARGE AS deliverycharge", 
			"TIN AS tin", 
			"BUSCODE AS buscode", 
			"FAXNUM AS faxnum", 
			"DISTCODE AS distcode", 
			"VISIT AS visit", 
			"TRADECHAN AS tradechan", 
			"CONSUMERCHAN AS consumerchan", 
			"SUBCONSUMERCHAN AS subconsumerchan", 
			"NIELSENAREA AS nielsenarea", 
			"INDIRECT AS indirect", 
			"CUSTCODE AS custcode", 
			"COUNTRY AS country", 
			"CITY AS city", 
			"STATE AS state", 
			"ZIP AS zip", 
			"KRAFTCUSTOMER AS kraftcustomer", 
			"PADDRESS AS paddress", 
			"PDISTRIBUTOR AS pdistributor", 
			"DISTRIBUTOR AS distributor", 
			"LOCATION_TYPE AS location_type", 
			"SURCHARGE AS surcharge", 
			"USERNAME AS username", 
			"TOKEN AS token", 
			"ISINSTITUTIONAL AS isinstitutional", 
			"SALESMANCODE AS salesmancode", 
			"SALESMANNAME AS salesmanname", 
			"ISEWTAX AS isewtax", 
			"EWTAXRATE AS ewtaxrate", 
			"AccountsGroup AS accountsgroup", 
			"ISBWTAX AS isbwtax", 
			"BWTAXRATE AS bwtaxrate" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ACCTCODE AS acctcode", 
			"ACCTNAME AS acctname", 
			"BILLTO AS billto", 
			"LASTNAME AS lastname", 
			"FIRSTNAME AS firstname", 
			"MI AS mi", 
			"AREACODE AS areacode", 
			"ACCTTYPE AS accttype", 
			"CONTACT AS contact", 
			"TELNUM AS telnum", 
			"PURCHASE AS purchase", 
			"PAYMENT AS payment", 
			"PURADJDB AS puradjdb", 
			"PURADJCR AS puradjcr", 
			"BALANCE AS balance", 
			"SALES AS sales", 
			"SALEPAY AS salepay", 
			"SALEADJDB AS saleadjdb", 
			"SALEADJCR AS saleadjcr", 
			"SALEBAL AS salebal", 
			"OVERPAY AS overpay", 
			"ORDERAMT AS orderamt", 
			"UNCLEARED AS uncleared", 
			"CREDITLIMIT AS creditlimit", 
			"TAXTYPE AS taxtype", 
			"WITHVAT AS withvat", 
			"TERMS AS terms", 
			"DISCONE AS discone", 
			"DISCTWO AS disctwo", 
			"DISCTHREE AS discthree", 
			"DISCFOUR AS discfour", 
			"BASEACCT AS baseacct", 
			"IFBASE AS ifbase", 
			"CREDITSTATUS AS creditstatus", 
			"NEWCODE AS newcode", 
			"NEWTYPE AS newtype", 
			"INTEREST AS interest", 
			"INDAYS AS indays", 
			"STATUS AS status", 
			"ADDRESS AS address", 
			"DELIVERYCHARGE AS deliverycharge", 
			"TIN AS tin", 
			"BUSCODE AS buscode", 
			"FAXNUM AS faxnum", 
			"DISTCODE AS distcode", 
			"VISIT AS visit", 
			"TRADECHAN AS tradechan", 
			"CONSUMERCHAN AS consumerchan", 
			"SUBCONSUMERCHAN AS subconsumerchan", 
			"NIELSENAREA AS nielsenarea", 
			"INDIRECT AS indirect", 
			"CUSTCODE AS custcode", 
			"COUNTRY AS country", 
			"CITY AS city", 
			"STATE AS state", 
			"ZIP AS zip", 
			"KRAFTCUSTOMER AS kraftcustomer", 
			"PADDRESS AS paddress", 
			"PDISTRIBUTOR AS pdistributor", 
			"DISTRIBUTOR AS distributor", 
			"LOCATION_TYPE AS location_type", 
			"SURCHARGE AS surcharge", 
			"USERNAME AS username", 
			"TOKEN AS token", 
			"ISINSTITUTIONAL AS isinstitutional", 
			"SALESMANCODE AS salesmancode", 
			"SALESMANNAME AS salesmanname", 
			"ISEWTAX AS isewtax", 
			"EWTAXRATE AS ewtaxrate", 
			"AccountsGroup AS accountsgroup", 
			"ISBWTAX AS isbwtax", 
			"BWTAXRATE AS bwtaxrate" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
