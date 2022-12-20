<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Invtaxes extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.INVTaxes';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'taxid';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["invtype","ordnum","ordnumunit","trannum","acctcode","taxid","rate","taxbase","taxamount","claimed","glhid","taxpaid","taxbalance"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"INVTYPE AS invtype", 
			"ORDNUM AS ordnum", 
			"ORDNUMUNIT AS ordnumunit", 
			"TRANNUM AS trannum", 
			"ACCTCODE AS acctcode", 
			"TAXID AS taxid", 
			"RATE AS rate", 
			"TAXBASE AS taxbase", 
			"TAXAMOUNT AS taxamount", 
			"CLAIMED AS claimed", 
			"GLHID AS glhid", 
			"TAXPAID AS taxpaid", 
			"TAXBALANCE AS taxbalance" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"INVTYPE AS invtype", 
			"ORDNUM AS ordnum", 
			"ORDNUMUNIT AS ordnumunit", 
			"TRANNUM AS trannum", 
			"ACCTCODE AS acctcode", 
			"TAXID AS taxid", 
			"RATE AS rate", 
			"TAXBASE AS taxbase", 
			"TAXAMOUNT AS taxamount", 
			"CLAIMED AS claimed", 
			"GLHID AS glhid", 
			"TAXPAID AS taxpaid", 
			"TAXBALANCE AS taxbalance" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"INVTYPE AS invtype", 
			"ORDNUM AS ordnum", 
			"ORDNUMUNIT AS ordnumunit", 
			"TRANNUM AS trannum", 
			"ACCTCODE AS acctcode", 
			"TAXID AS taxid", 
			"RATE AS rate", 
			"TAXBASE AS taxbase", 
			"TAXAMOUNT AS taxamount", 
			"CLAIMED AS claimed", 
			"GLHID AS glhid", 
			"TAXPAID AS taxpaid", 
			"TAXBALANCE AS taxbalance" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"INVTYPE AS invtype", 
			"ORDNUM AS ordnum", 
			"ORDNUMUNIT AS ordnumunit", 
			"TRANNUM AS trannum", 
			"ACCTCODE AS acctcode", 
			"TAXID AS taxid", 
			"RATE AS rate", 
			"TAXBASE AS taxbase", 
			"TAXAMOUNT AS taxamount", 
			"CLAIMED AS claimed", 
			"GLHID AS glhid", 
			"TAXPAID AS taxpaid", 
			"TAXBALANCE AS taxbalance" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"INVTYPE AS invtype", 
			"ORDNUM AS ordnum", 
			"ORDNUMUNIT AS ordnumunit", 
			"TRANNUM AS trannum", 
			"ACCTCODE AS acctcode", 
			"TAXID AS taxid", 
			"RATE AS rate", 
			"TAXBASE AS taxbase", 
			"TAXAMOUNT AS taxamount", 
			"CLAIMED AS claimed", 
			"GLHID AS glhid", 
			"TAXPAID AS taxpaid", 
			"TAXBALANCE AS taxbalance" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
