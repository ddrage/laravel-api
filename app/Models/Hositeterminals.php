<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Hositeterminals extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.HOSiteTerminals';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id","termno","invno","noninvno","desc","prnloc","prnsn","prnfeed","autoprt","cdrwcode","mode","roundfactor","spacer","cute","sr","shfcount","vatdiv","stationcode","rinvno","rnoninvno","eod","safedropno","rsafedropno","transno","amutax","bpnno","minno","terminal","serialno","outletid","arno","rarno","zoneid","divisionid","posdrive","datadrive","outlettype","warningsd","alarmsd","risccservername","siteservername","risscdb","sitedb","dbuserid","dbpassword","dualdisplay","displaytopx","displaytopy","listtopx","listtopy","listwidth","listheight","mediadirectory","mediafilter","mediaidle","posidle","secondprinter","rct","textfile","csv","flagfile","cdrawloc","admpos","postypeno","transtype","hofolder","vatoption","centraldirectory","centralprinter","initialfund","companyname","maxscdiscount","printwidth","poreg","tmpdir","trdir","escdir","hfdir","keycfgdir","rcttext","ordertext","ejtext","displaydat","deffotype","reod","type","isos","status","ekpos","mealstubid","tickettype","ticketprinter","mealstubtype","spctickettype","terminalcode","uploaded"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				BPNNO LIKE ?  OR 
				MINNO LIKE ?  OR 
				TERMINAL LIKE ?  OR 
				SERIALNO LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%"
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
			"ID AS id", 
			"TERMNO AS termno", 
			"INVNO AS invno", 
			"NONINVNO AS noninvno", 
			"DESC AS desc", 
			"PRNLOC AS prnloc", 
			"PRNSN AS prnsn", 
			"PRNFEED AS prnfeed", 
			"AUTOPRT AS autoprt", 
			"CDRWCODE AS cdrwcode", 
			"MODE AS mode", 
			"ROUNDFACTOR AS roundfactor", 
			"SPACER AS spacer", 
			"CUTE AS cute", 
			"SR AS sr", 
			"SHFCOUNT AS shfcount", 
			"VATDIV AS vatdiv", 
			"STATIONCODE AS stationcode", 
			"RINVNO AS rinvno", 
			"RNONINVNO AS rnoninvno", 
			"EOD AS eod", 
			"SAFEDROPNO AS safedropno", 
			"RSAFEDROPNO AS rsafedropno", 
			"TRANSNO AS transno", 
			"AMUTAX AS amutax", 
			"BPNNO AS bpnno", 
			"MINNO AS minno", 
			"TERMINAL AS terminal", 
			"SERIALNO AS serialno", 
			"OUTLETID AS outletid", 
			"ARNO AS arno", 
			"RARNO AS rarno", 
			"ZONEID AS zoneid", 
			"DIVISIONID AS divisionid", 
			"POSDRIVE AS posdrive", 
			"DATADRIVE AS datadrive", 
			"OUTLETTYPE AS outlettype", 
			"WARNINGSD AS warningsd", 
			"ALARMSD AS alarmsd", 
			"RISCCSERVERNAME AS risccservername", 
			"SITESERVERNAME AS siteservername", 
			"RISSCDB AS risscdb", 
			"SITEDB AS sitedb", 
			"DBUSERID AS dbuserid", 
			"DUALDISPLAY AS dualdisplay", 
			"DISPLAYTOPX AS displaytopx", 
			"DISPLAYTOPY AS displaytopy", 
			"LISTTOPX AS listtopx", 
			"LISTTOPY AS listtopy", 
			"LISTWIDTH AS listwidth", 
			"LISTHEIGHT AS listheight", 
			"MEDIADIRECTORY AS mediadirectory", 
			"MEDIAFILTER AS mediafilter", 
			"MEDIAIDLE AS mediaidle", 
			"POSIDLE AS posidle", 
			"SECONDPRINTER AS secondprinter", 
			"RCT AS rct", 
			"TEXTFILE AS textfile", 
			"CSV AS csv", 
			"FLAGFILE AS flagfile", 
			"CDRAWLOC AS cdrawloc", 
			"ADMPOS AS admpos", 
			"POSTYPENO AS postypeno", 
			"TRANSTYPE AS transtype", 
			"HOFOLDER AS hofolder", 
			"VATOPTION AS vatoption", 
			"CENTRALDIRECTORY AS centraldirectory", 
			"CENTRALPRINTER AS centralprinter", 
			"INITIALFUND AS initialfund", 
			"COMPANYNAME AS companyname", 
			"MAXSCDISCOUNT AS maxscdiscount", 
			"PRINTWIDTH AS printwidth", 
			"POREG AS poreg", 
			"TMPDIR AS tmpdir", 
			"TRDIR AS trdir", 
			"ESCDIR AS escdir", 
			"HFDIR AS hfdir", 
			"KEYCFGDIR AS keycfgdir", 
			"RCTTEXT AS rcttext", 
			"ORDERTEXT AS ordertext", 
			"EJTEXT AS ejtext", 
			"DISPLAYDAT AS displaydat", 
			"DEFFOTYPE AS deffotype", 
			"REOD AS reod", 
			"TYPE AS type", 
			"ISOS AS isos", 
			"STATUS AS status", 
			"EKPOS AS ekpos", 
			"MEALSTUBID AS mealstubid", 
			"TICKETTYPE AS tickettype", 
			"TICKETPRINTER AS ticketprinter", 
			"MEALSTUBTYPE AS mealstubtype", 
			"SPCTICKETTYPE AS spctickettype", 
			"TERMINALCODE AS terminalcode", 
			"UPLOADED AS uploaded" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ID AS id", 
			"TERMNO AS termno", 
			"INVNO AS invno", 
			"NONINVNO AS noninvno", 
			"DESC AS desc", 
			"PRNLOC AS prnloc", 
			"PRNSN AS prnsn", 
			"PRNFEED AS prnfeed", 
			"AUTOPRT AS autoprt", 
			"CDRWCODE AS cdrwcode", 
			"MODE AS mode", 
			"ROUNDFACTOR AS roundfactor", 
			"SPACER AS spacer", 
			"CUTE AS cute", 
			"SR AS sr", 
			"SHFCOUNT AS shfcount", 
			"VATDIV AS vatdiv", 
			"STATIONCODE AS stationcode", 
			"RINVNO AS rinvno", 
			"RNONINVNO AS rnoninvno", 
			"EOD AS eod", 
			"SAFEDROPNO AS safedropno", 
			"RSAFEDROPNO AS rsafedropno", 
			"TRANSNO AS transno", 
			"AMUTAX AS amutax", 
			"BPNNO AS bpnno", 
			"MINNO AS minno", 
			"TERMINAL AS terminal", 
			"SERIALNO AS serialno", 
			"OUTLETID AS outletid", 
			"ARNO AS arno", 
			"RARNO AS rarno", 
			"ZONEID AS zoneid", 
			"DIVISIONID AS divisionid", 
			"POSDRIVE AS posdrive", 
			"DATADRIVE AS datadrive", 
			"OUTLETTYPE AS outlettype", 
			"WARNINGSD AS warningsd", 
			"ALARMSD AS alarmsd", 
			"RISCCSERVERNAME AS risccservername", 
			"SITESERVERNAME AS siteservername", 
			"RISSCDB AS risscdb", 
			"SITEDB AS sitedb", 
			"DBUSERID AS dbuserid", 
			"DUALDISPLAY AS dualdisplay", 
			"DISPLAYTOPX AS displaytopx", 
			"DISPLAYTOPY AS displaytopy", 
			"LISTTOPX AS listtopx", 
			"LISTTOPY AS listtopy", 
			"LISTWIDTH AS listwidth", 
			"LISTHEIGHT AS listheight", 
			"MEDIADIRECTORY AS mediadirectory", 
			"MEDIAFILTER AS mediafilter", 
			"MEDIAIDLE AS mediaidle", 
			"POSIDLE AS posidle", 
			"SECONDPRINTER AS secondprinter", 
			"RCT AS rct", 
			"TEXTFILE AS textfile", 
			"CSV AS csv", 
			"FLAGFILE AS flagfile", 
			"CDRAWLOC AS cdrawloc", 
			"ADMPOS AS admpos", 
			"POSTYPENO AS postypeno", 
			"TRANSTYPE AS transtype", 
			"HOFOLDER AS hofolder", 
			"VATOPTION AS vatoption", 
			"CENTRALDIRECTORY AS centraldirectory", 
			"CENTRALPRINTER AS centralprinter", 
			"INITIALFUND AS initialfund", 
			"COMPANYNAME AS companyname", 
			"MAXSCDISCOUNT AS maxscdiscount", 
			"PRINTWIDTH AS printwidth", 
			"POREG AS poreg", 
			"TMPDIR AS tmpdir", 
			"TRDIR AS trdir", 
			"ESCDIR AS escdir", 
			"HFDIR AS hfdir", 
			"KEYCFGDIR AS keycfgdir", 
			"RCTTEXT AS rcttext", 
			"ORDERTEXT AS ordertext", 
			"EJTEXT AS ejtext", 
			"DISPLAYDAT AS displaydat", 
			"DEFFOTYPE AS deffotype", 
			"REOD AS reod", 
			"TYPE AS type", 
			"ISOS AS isos", 
			"STATUS AS status", 
			"EKPOS AS ekpos", 
			"MEALSTUBID AS mealstubid", 
			"TICKETTYPE AS tickettype", 
			"TICKETPRINTER AS ticketprinter", 
			"MEALSTUBTYPE AS mealstubtype", 
			"SPCTICKETTYPE AS spctickettype", 
			"TERMINALCODE AS terminalcode", 
			"UPLOADED AS uploaded" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ID AS id", 
			"TERMNO AS termno", 
			"INVNO AS invno", 
			"NONINVNO AS noninvno", 
			"DESC AS desc", 
			"PRNLOC AS prnloc", 
			"PRNSN AS prnsn", 
			"PRNFEED AS prnfeed", 
			"AUTOPRT AS autoprt", 
			"CDRWCODE AS cdrwcode", 
			"MODE AS mode", 
			"ROUNDFACTOR AS roundfactor", 
			"SPACER AS spacer", 
			"CUTE AS cute", 
			"SR AS sr", 
			"SHFCOUNT AS shfcount", 
			"VATDIV AS vatdiv", 
			"STATIONCODE AS stationcode", 
			"RINVNO AS rinvno", 
			"RNONINVNO AS rnoninvno", 
			"EOD AS eod", 
			"SAFEDROPNO AS safedropno", 
			"RSAFEDROPNO AS rsafedropno", 
			"TRANSNO AS transno", 
			"AMUTAX AS amutax", 
			"BPNNO AS bpnno", 
			"MINNO AS minno", 
			"TERMINAL AS terminal", 
			"SERIALNO AS serialno", 
			"OUTLETID AS outletid", 
			"ARNO AS arno", 
			"RARNO AS rarno", 
			"ZONEID AS zoneid", 
			"DIVISIONID AS divisionid", 
			"POSDRIVE AS posdrive", 
			"DATADRIVE AS datadrive", 
			"OUTLETTYPE AS outlettype", 
			"WARNINGSD AS warningsd", 
			"ALARMSD AS alarmsd", 
			"RISCCSERVERNAME AS risccservername", 
			"SITESERVERNAME AS siteservername", 
			"RISSCDB AS risscdb", 
			"SITEDB AS sitedb", 
			"DBUSERID AS dbuserid", 
			"DUALDISPLAY AS dualdisplay", 
			"DISPLAYTOPX AS displaytopx", 
			"DISPLAYTOPY AS displaytopy", 
			"LISTTOPX AS listtopx", 
			"LISTTOPY AS listtopy", 
			"LISTWIDTH AS listwidth", 
			"LISTHEIGHT AS listheight", 
			"MEDIADIRECTORY AS mediadirectory", 
			"MEDIAFILTER AS mediafilter", 
			"MEDIAIDLE AS mediaidle", 
			"POSIDLE AS posidle", 
			"SECONDPRINTER AS secondprinter", 
			"RCT AS rct", 
			"TEXTFILE AS textfile", 
			"CSV AS csv", 
			"FLAGFILE AS flagfile", 
			"CDRAWLOC AS cdrawloc", 
			"ADMPOS AS admpos", 
			"POSTYPENO AS postypeno", 
			"TRANSTYPE AS transtype", 
			"HOFOLDER AS hofolder", 
			"VATOPTION AS vatoption", 
			"CENTRALDIRECTORY AS centraldirectory", 
			"CENTRALPRINTER AS centralprinter", 
			"INITIALFUND AS initialfund", 
			"COMPANYNAME AS companyname", 
			"MAXSCDISCOUNT AS maxscdiscount", 
			"PRINTWIDTH AS printwidth", 
			"POREG AS poreg", 
			"TMPDIR AS tmpdir", 
			"TRDIR AS trdir", 
			"ESCDIR AS escdir", 
			"HFDIR AS hfdir", 
			"KEYCFGDIR AS keycfgdir", 
			"RCTTEXT AS rcttext", 
			"ORDERTEXT AS ordertext", 
			"EJTEXT AS ejtext", 
			"DISPLAYDAT AS displaydat", 
			"DEFFOTYPE AS deffotype", 
			"REOD AS reod", 
			"TYPE AS type", 
			"ISOS AS isos", 
			"STATUS AS status", 
			"EKPOS AS ekpos", 
			"MEALSTUBID AS mealstubid", 
			"TICKETTYPE AS tickettype", 
			"TICKETPRINTER AS ticketprinter", 
			"MEALSTUBTYPE AS mealstubtype", 
			"SPCTICKETTYPE AS spctickettype", 
			"TERMINALCODE AS terminalcode", 
			"UPLOADED AS uploaded" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ID AS id", 
			"TERMNO AS termno", 
			"INVNO AS invno", 
			"NONINVNO AS noninvno", 
			"DESC AS desc", 
			"PRNLOC AS prnloc", 
			"PRNSN AS prnsn", 
			"PRNFEED AS prnfeed", 
			"AUTOPRT AS autoprt", 
			"CDRWCODE AS cdrwcode", 
			"MODE AS mode", 
			"ROUNDFACTOR AS roundfactor", 
			"SPACER AS spacer", 
			"CUTE AS cute", 
			"SR AS sr", 
			"SHFCOUNT AS shfcount", 
			"VATDIV AS vatdiv", 
			"STATIONCODE AS stationcode", 
			"RINVNO AS rinvno", 
			"RNONINVNO AS rnoninvno", 
			"EOD AS eod", 
			"SAFEDROPNO AS safedropno", 
			"RSAFEDROPNO AS rsafedropno", 
			"TRANSNO AS transno", 
			"AMUTAX AS amutax", 
			"BPNNO AS bpnno", 
			"MINNO AS minno", 
			"TERMINAL AS terminal", 
			"SERIALNO AS serialno", 
			"OUTLETID AS outletid", 
			"ARNO AS arno", 
			"RARNO AS rarno", 
			"ZONEID AS zoneid", 
			"DIVISIONID AS divisionid", 
			"POSDRIVE AS posdrive", 
			"DATADRIVE AS datadrive", 
			"OUTLETTYPE AS outlettype", 
			"WARNINGSD AS warningsd", 
			"ALARMSD AS alarmsd", 
			"RISCCSERVERNAME AS risccservername", 
			"SITESERVERNAME AS siteservername", 
			"RISSCDB AS risscdb", 
			"SITEDB AS sitedb", 
			"DBUSERID AS dbuserid", 
			"DUALDISPLAY AS dualdisplay", 
			"DISPLAYTOPX AS displaytopx", 
			"DISPLAYTOPY AS displaytopy", 
			"LISTTOPX AS listtopx", 
			"LISTTOPY AS listtopy", 
			"LISTWIDTH AS listwidth", 
			"LISTHEIGHT AS listheight", 
			"MEDIADIRECTORY AS mediadirectory", 
			"MEDIAFILTER AS mediafilter", 
			"MEDIAIDLE AS mediaidle", 
			"POSIDLE AS posidle", 
			"SECONDPRINTER AS secondprinter", 
			"RCT AS rct", 
			"TEXTFILE AS textfile", 
			"CSV AS csv", 
			"FLAGFILE AS flagfile", 
			"CDRAWLOC AS cdrawloc", 
			"ADMPOS AS admpos", 
			"POSTYPENO AS postypeno", 
			"TRANSTYPE AS transtype", 
			"HOFOLDER AS hofolder", 
			"VATOPTION AS vatoption", 
			"CENTRALDIRECTORY AS centraldirectory", 
			"CENTRALPRINTER AS centralprinter", 
			"INITIALFUND AS initialfund", 
			"COMPANYNAME AS companyname", 
			"MAXSCDISCOUNT AS maxscdiscount", 
			"PRINTWIDTH AS printwidth", 
			"POREG AS poreg", 
			"TMPDIR AS tmpdir", 
			"TRDIR AS trdir", 
			"ESCDIR AS escdir", 
			"HFDIR AS hfdir", 
			"KEYCFGDIR AS keycfgdir", 
			"RCTTEXT AS rcttext", 
			"ORDERTEXT AS ordertext", 
			"EJTEXT AS ejtext", 
			"DISPLAYDAT AS displaydat", 
			"DEFFOTYPE AS deffotype", 
			"REOD AS reod", 
			"TYPE AS type", 
			"ISOS AS isos", 
			"STATUS AS status", 
			"EKPOS AS ekpos", 
			"MEALSTUBID AS mealstubid", 
			"TICKETTYPE AS tickettype", 
			"TICKETPRINTER AS ticketprinter", 
			"MEALSTUBTYPE AS mealstubtype", 
			"SPCTICKETTYPE AS spctickettype", 
			"TERMINALCODE AS terminalcode", 
			"UPLOADED AS uploaded" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ID AS id", 
			"TERMNO AS termno", 
			"INVNO AS invno", 
			"NONINVNO AS noninvno", 
			"DESC AS desc", 
			"PRNLOC AS prnloc", 
			"PRNSN AS prnsn", 
			"PRNFEED AS prnfeed", 
			"AUTOPRT AS autoprt", 
			"CDRWCODE AS cdrwcode", 
			"MODE AS mode", 
			"ROUNDFACTOR AS roundfactor", 
			"SPACER AS spacer", 
			"CUTE AS cute", 
			"SR AS sr", 
			"SHFCOUNT AS shfcount", 
			"VATDIV AS vatdiv", 
			"STATIONCODE AS stationcode", 
			"RINVNO AS rinvno", 
			"RNONINVNO AS rnoninvno", 
			"EOD AS eod", 
			"SAFEDROPNO AS safedropno", 
			"RSAFEDROPNO AS rsafedropno", 
			"TRANSNO AS transno", 
			"AMUTAX AS amutax", 
			"BPNNO AS bpnno", 
			"MINNO AS minno", 
			"TERMINAL AS terminal", 
			"SERIALNO AS serialno", 
			"OUTLETID AS outletid", 
			"ARNO AS arno", 
			"RARNO AS rarno", 
			"ZONEID AS zoneid", 
			"DIVISIONID AS divisionid", 
			"POSDRIVE AS posdrive", 
			"DATADRIVE AS datadrive", 
			"OUTLETTYPE AS outlettype", 
			"WARNINGSD AS warningsd", 
			"ALARMSD AS alarmsd", 
			"RISCCSERVERNAME AS risccservername", 
			"SITESERVERNAME AS siteservername", 
			"RISSCDB AS risscdb", 
			"SITEDB AS sitedb", 
			"DBUSERID AS dbuserid", 
			"DUALDISPLAY AS dualdisplay", 
			"DISPLAYTOPX AS displaytopx", 
			"DISPLAYTOPY AS displaytopy", 
			"LISTTOPX AS listtopx", 
			"LISTTOPY AS listtopy", 
			"LISTWIDTH AS listwidth", 
			"LISTHEIGHT AS listheight", 
			"MEDIADIRECTORY AS mediadirectory", 
			"MEDIAFILTER AS mediafilter", 
			"MEDIAIDLE AS mediaidle", 
			"POSIDLE AS posidle", 
			"SECONDPRINTER AS secondprinter", 
			"RCT AS rct", 
			"TEXTFILE AS textfile", 
			"CSV AS csv", 
			"FLAGFILE AS flagfile", 
			"CDRAWLOC AS cdrawloc", 
			"ADMPOS AS admpos", 
			"POSTYPENO AS postypeno", 
			"TRANSTYPE AS transtype", 
			"HOFOLDER AS hofolder", 
			"VATOPTION AS vatoption", 
			"CENTRALDIRECTORY AS centraldirectory", 
			"CENTRALPRINTER AS centralprinter", 
			"INITIALFUND AS initialfund", 
			"COMPANYNAME AS companyname", 
			"MAXSCDISCOUNT AS maxscdiscount", 
			"PRINTWIDTH AS printwidth", 
			"POREG AS poreg", 
			"TMPDIR AS tmpdir", 
			"TRDIR AS trdir", 
			"ESCDIR AS escdir", 
			"HFDIR AS hfdir", 
			"KEYCFGDIR AS keycfgdir", 
			"RCTTEXT AS rcttext", 
			"ORDERTEXT AS ordertext", 
			"EJTEXT AS ejtext", 
			"DISPLAYDAT AS displaydat", 
			"DEFFOTYPE AS deffotype", 
			"REOD AS reod", 
			"TYPE AS type", 
			"ISOS AS isos", 
			"STATUS AS status", 
			"EKPOS AS ekpos", 
			"MEALSTUBID AS mealstubid", 
			"TICKETTYPE AS tickettype", 
			"TICKETPRINTER AS ticketprinter", 
			"MEALSTUBTYPE AS mealstubtype", 
			"SPCTICKETTYPE AS spctickettype", 
			"TERMINALCODE AS terminalcode", 
			"UPLOADED AS uploaded" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
