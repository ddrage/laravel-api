<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Company extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.Company';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'companyno';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["companyno","companyname"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"COMPANYNO AS companyno", 
			"COMPANYNAME AS companyname" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"COMPANYNO AS companyno", 
			"COMPANYNAME AS companyname" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"COMPANYNO AS companyno", 
			"COMPANYNAME AS companyname" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"COMPANYNO AS companyno", 
			"COMPANYNAME AS companyname" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"COMPANYNO AS companyno", 
			"COMPANYNAME AS companyname" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
