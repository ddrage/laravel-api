<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Taxcodes extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.TaxCodes';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'taxcode';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["taxcode","description"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"TAXCODE AS taxcode", 
			"DESCRIPTION AS description" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"TAXCODE AS taxcode", 
			"DESCRIPTION AS description" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"TAXCODE AS taxcode", 
			"DESCRIPTION AS description" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"TAXCODE AS taxcode", 
			"DESCRIPTION AS description" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"TAXCODE AS taxcode", 
			"DESCRIPTION AS description" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
