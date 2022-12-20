<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Ortaxes extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.ORTaxes';
	

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
	protected $fillable = ["glhid","trannum","taxid","acctcode","rate","taxbase","taxamount","claimed"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"GLHID AS glhid", 
			"TRANNUM AS trannum", 
			"TAXID AS taxid", 
			"ACCTCODE AS acctcode", 
			"RATE AS rate", 
			"TAXBASE AS taxbase", 
			"TAXAMOUNT AS taxamount", 
			"CLAIMED AS claimed" 
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
			"TRANNUM AS trannum", 
			"TAXID AS taxid", 
			"ACCTCODE AS acctcode", 
			"RATE AS rate", 
			"TAXBASE AS taxbase", 
			"TAXAMOUNT AS taxamount", 
			"CLAIMED AS claimed" 
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
			"TRANNUM AS trannum", 
			"TAXID AS taxid", 
			"ACCTCODE AS acctcode", 
			"RATE AS rate", 
			"TAXBASE AS taxbase", 
			"TAXAMOUNT AS taxamount", 
			"CLAIMED AS claimed" 
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
			"TRANNUM AS trannum", 
			"TAXID AS taxid", 
			"ACCTCODE AS acctcode", 
			"RATE AS rate", 
			"TAXBASE AS taxbase", 
			"TAXAMOUNT AS taxamount", 
			"CLAIMED AS claimed" 
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
			"TRANNUM AS trannum", 
			"TAXID AS taxid", 
			"ACCTCODE AS acctcode", 
			"RATE AS rate", 
			"TAXBASE AS taxbase", 
			"TAXAMOUNT AS taxamount", 
			"CLAIMED AS claimed" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
