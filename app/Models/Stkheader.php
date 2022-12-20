<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Stkheader extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.stkheader';
	

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
	protected $fillable = ["trantype","trannum","tranno","transcode","refdate","acctcode","acctname","warefrom","wareto","chartcode","refinv","refdr","refbol","refpr","amount","returned","balance","posted","apvnum","scheduled","remarks","division","encodedby","ponum","cmnumber","invresetdate","isinvreset"];
	

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
			"TRANSCODE AS transcode", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"ACCTNAME AS acctname", 
			"WAREFROM AS warefrom", 
			"WARETO AS wareto", 
			"CHARTCODE AS chartcode", 
			"REFINV AS refinv", 
			"REFDR AS refdr", 
			"REFBOL AS refbol", 
			"REFPR AS refpr", 
			"AMOUNT AS amount", 
			"RETURNED AS returned", 
			"BALANCE AS balance", 
			"POSTED AS posted", 
			"APVNUM AS apvnum", 
			"SCHEDULED AS scheduled", 
			"REMARKS AS remarks", 
			"DIVISION AS division", 
			"ENCODEDBY AS encodedby", 
			"PONUM AS ponum", 
			"CMNUMBER AS cmnumber", 
			"INVRESETDATE AS invresetdate", 
			"ISINVRESET AS isinvreset" 
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
			"TRANSCODE AS transcode", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"ACCTNAME AS acctname", 
			"WAREFROM AS warefrom", 
			"WARETO AS wareto", 
			"CHARTCODE AS chartcode", 
			"REFINV AS refinv", 
			"REFDR AS refdr", 
			"REFBOL AS refbol", 
			"REFPR AS refpr", 
			"AMOUNT AS amount", 
			"RETURNED AS returned", 
			"BALANCE AS balance", 
			"POSTED AS posted", 
			"APVNUM AS apvnum", 
			"SCHEDULED AS scheduled", 
			"REMARKS AS remarks", 
			"DIVISION AS division", 
			"ENCODEDBY AS encodedby", 
			"PONUM AS ponum", 
			"CMNUMBER AS cmnumber", 
			"INVRESETDATE AS invresetdate", 
			"ISINVRESET AS isinvreset" 
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
			"TRANSCODE AS transcode", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"ACCTNAME AS acctname", 
			"WAREFROM AS warefrom", 
			"WARETO AS wareto", 
			"CHARTCODE AS chartcode", 
			"REFINV AS refinv", 
			"REFDR AS refdr", 
			"REFBOL AS refbol", 
			"REFPR AS refpr", 
			"AMOUNT AS amount", 
			"RETURNED AS returned", 
			"BALANCE AS balance", 
			"POSTED AS posted", 
			"APVNUM AS apvnum", 
			"SCHEDULED AS scheduled", 
			"REMARKS AS remarks", 
			"DIVISION AS division", 
			"ENCODEDBY AS encodedby", 
			"PONUM AS ponum", 
			"CMNUMBER AS cmnumber", 
			"INVRESETDATE AS invresetdate", 
			"ISINVRESET AS isinvreset" 
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
			"TRANSCODE AS transcode", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"ACCTNAME AS acctname", 
			"WAREFROM AS warefrom", 
			"WARETO AS wareto", 
			"CHARTCODE AS chartcode", 
			"REFINV AS refinv", 
			"REFDR AS refdr", 
			"REFBOL AS refbol", 
			"REFPR AS refpr", 
			"AMOUNT AS amount", 
			"RETURNED AS returned", 
			"BALANCE AS balance", 
			"POSTED AS posted", 
			"APVNUM AS apvnum", 
			"SCHEDULED AS scheduled", 
			"REMARKS AS remarks", 
			"DIVISION AS division", 
			"ENCODEDBY AS encodedby", 
			"PONUM AS ponum", 
			"CMNUMBER AS cmnumber", 
			"INVRESETDATE AS invresetdate", 
			"ISINVRESET AS isinvreset" 
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
			"TRANSCODE AS transcode", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"ACCTNAME AS acctname", 
			"WAREFROM AS warefrom", 
			"WARETO AS wareto", 
			"CHARTCODE AS chartcode", 
			"REFINV AS refinv", 
			"REFDR AS refdr", 
			"REFBOL AS refbol", 
			"REFPR AS refpr", 
			"AMOUNT AS amount", 
			"RETURNED AS returned", 
			"BALANCE AS balance", 
			"POSTED AS posted", 
			"APVNUM AS apvnum", 
			"SCHEDULED AS scheduled", 
			"REMARKS AS remarks", 
			"DIVISION AS division", 
			"ENCODEDBY AS encodedby", 
			"PONUM AS ponum", 
			"CMNUMBER AS cmnumber", 
			"INVRESETDATE AS invresetdate", 
			"ISINVRESET AS isinvreset" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
