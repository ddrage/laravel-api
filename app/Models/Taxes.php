<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Taxes extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.Taxes';
	

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
	protected $fillable = ["taxid","taxdescription","rate"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"TAXID AS taxid", 
			"TAXDESCRIPTION AS taxdescription", 
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
			"TAXID AS taxid", 
			"TAXDESCRIPTION AS taxdescription", 
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
			"TAXID AS taxid", 
			"TAXDESCRIPTION AS taxdescription", 
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
			"TAXID AS taxid", 
			"TAXDESCRIPTION AS taxdescription", 
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
			"TAXID AS taxid", 
			"TAXDESCRIPTION AS taxdescription", 
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
