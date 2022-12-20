<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Accountstaxes extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.AccountsTaxes';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'accttaxid';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["accttaxid","acctcode","taxid","rate"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"ACCTTAXID AS accttaxid", 
			"ACCTCODE AS acctcode", 
			"TAXID AS taxid", 
			"RATE AS rate" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ACCTTAXID AS accttaxid", 
			"ACCTCODE AS acctcode", 
			"TAXID AS taxid", 
			"RATE AS rate" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ACCTTAXID AS accttaxid", 
			"ACCTCODE AS acctcode", 
			"TAXID AS taxid", 
			"RATE AS rate" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ACCTTAXID AS accttaxid", 
			"ACCTCODE AS acctcode", 
			"TAXID AS taxid", 
			"RATE AS rate" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ACCTTAXID AS accttaxid", 
			"ACCTCODE AS acctcode", 
			"TAXID AS taxid", 
			"RATE AS rate" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
