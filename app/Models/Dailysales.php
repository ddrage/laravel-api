<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Dailysales extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.DailySales';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'date';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["date","totalsales","cashsales","creditsales","cashmart","cashmktg","creditmart","creditmktg"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"DATE AS date", 
			"TOTALSALES AS totalsales", 
			"CASHSALES AS cashsales", 
			"CREDITSALES AS creditsales", 
			"CASHMART AS cashmart", 
			"CASHMKTG AS cashmktg", 
			"CREDITMART AS creditmart", 
			"CREDITMKTG AS creditmktg" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"DATE AS date", 
			"TOTALSALES AS totalsales", 
			"CASHSALES AS cashsales", 
			"CREDITSALES AS creditsales", 
			"CASHMART AS cashmart", 
			"CASHMKTG AS cashmktg", 
			"CREDITMART AS creditmart", 
			"CREDITMKTG AS creditmktg" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"DATE AS date", 
			"TOTALSALES AS totalsales", 
			"CASHSALES AS cashsales", 
			"CREDITSALES AS creditsales", 
			"CASHMART AS cashmart", 
			"CASHMKTG AS cashmktg", 
			"CREDITMART AS creditmart", 
			"CREDITMKTG AS creditmktg" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"DATE AS date", 
			"TOTALSALES AS totalsales", 
			"CASHSALES AS cashsales", 
			"CREDITSALES AS creditsales", 
			"CASHMART AS cashmart", 
			"CASHMKTG AS cashmktg", 
			"CREDITMART AS creditmart", 
			"CREDITMKTG AS creditmktg" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"DATE AS date", 
			"TOTALSALES AS totalsales", 
			"CASHSALES AS cashsales", 
			"CREDITSALES AS creditsales", 
			"CASHMART AS cashmart", 
			"CASHMKTG AS cashmktg", 
			"CREDITMART AS creditmart", 
			"CREDITMKTG AS creditmktg" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
