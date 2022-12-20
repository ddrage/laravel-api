<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Speriod extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.SPeriod';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'periodid';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["periodid","periodfrom","periodto"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"PERIODID AS periodid", 
			"PERIODFROM AS periodfrom", 
			"PERIODTO AS periodto" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"PERIODID AS periodid", 
			"PERIODFROM AS periodfrom", 
			"PERIODTO AS periodto" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"PERIODID AS periodid", 
			"PERIODFROM AS periodfrom", 
			"PERIODTO AS periodto" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"PERIODID AS periodid", 
			"PERIODFROM AS periodfrom", 
			"PERIODTO AS periodto" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"PERIODID AS periodid", 
			"PERIODFROM AS periodfrom", 
			"PERIODTO AS periodto" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
