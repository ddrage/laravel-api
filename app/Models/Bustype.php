<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Bustype extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.bustype';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'buscode';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["buscode","bustype"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"BUSCODE AS buscode", 
			"BUSTYPE AS bustype" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"BUSCODE AS buscode", 
			"BUSTYPE AS bustype" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"BUSCODE AS buscode", 
			"BUSTYPE AS bustype" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"BUSCODE AS buscode", 
			"BUSTYPE AS bustype" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"BUSCODE AS buscode", 
			"BUSTYPE AS bustype" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
