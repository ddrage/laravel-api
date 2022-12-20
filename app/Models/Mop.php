<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Mop extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.mop';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["id","desc","pricelevel","partialtender","change","cashdraw","tender","refno","gcvalue","currencyid","mopcatid","isloyalty","displayunused","selectoutlets","uploaded"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"ID AS id", 
			"DESC AS desc", 
			"PRICELEVEL AS pricelevel", 
			"PARTIALTENDER AS partialtender", 
			"CHANGE AS change", 
			"CASHDRAW AS cashdraw", 
			"TENDER AS tender", 
			"REFNO AS refno", 
			"GCVALUE AS gcvalue", 
			"CURRENCYID AS currencyid", 
			"MOPCATID AS mopcatid", 
			"ISLOYALTY AS isloyalty", 
			"DISPLAYUNUSED AS displayunused", 
			"SELECTOUTLETS AS selectoutlets", 
			"UPLOADED AS uploaded" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"ID AS id", 
			"DESC AS desc", 
			"PRICELEVEL AS pricelevel", 
			"PARTIALTENDER AS partialtender", 
			"CHANGE AS change", 
			"CASHDRAW AS cashdraw", 
			"TENDER AS tender", 
			"REFNO AS refno", 
			"GCVALUE AS gcvalue", 
			"CURRENCYID AS currencyid", 
			"MOPCATID AS mopcatid", 
			"ISLOYALTY AS isloyalty", 
			"DISPLAYUNUSED AS displayunused", 
			"SELECTOUTLETS AS selectoutlets", 
			"UPLOADED AS uploaded" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"ID AS id", 
			"DESC AS desc", 
			"PRICELEVEL AS pricelevel", 
			"PARTIALTENDER AS partialtender", 
			"CHANGE AS change", 
			"CASHDRAW AS cashdraw", 
			"TENDER AS tender", 
			"REFNO AS refno", 
			"GCVALUE AS gcvalue", 
			"CURRENCYID AS currencyid", 
			"MOPCATID AS mopcatid", 
			"ISLOYALTY AS isloyalty", 
			"DISPLAYUNUSED AS displayunused", 
			"SELECTOUTLETS AS selectoutlets", 
			"UPLOADED AS uploaded" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"ID AS id", 
			"DESC AS desc", 
			"PRICELEVEL AS pricelevel", 
			"PARTIALTENDER AS partialtender", 
			"CHANGE AS change", 
			"CASHDRAW AS cashdraw", 
			"TENDER AS tender", 
			"REFNO AS refno", 
			"GCVALUE AS gcvalue", 
			"CURRENCYID AS currencyid", 
			"MOPCATID AS mopcatid", 
			"ISLOYALTY AS isloyalty", 
			"DISPLAYUNUSED AS displayunused", 
			"SELECTOUTLETS AS selectoutlets", 
			"UPLOADED AS uploaded" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"ID AS id", 
			"DESC AS desc", 
			"PRICELEVEL AS pricelevel", 
			"PARTIALTENDER AS partialtender", 
			"CHANGE AS change", 
			"CASHDRAW AS cashdraw", 
			"TENDER AS tender", 
			"REFNO AS refno", 
			"GCVALUE AS gcvalue", 
			"CURRENCYID AS currencyid", 
			"MOPCATID AS mopcatid", 
			"ISLOYALTY AS isloyalty", 
			"DISPLAYUNUSED AS displayunused", 
			"SELECTOUTLETS AS selectoutlets", 
			"UPLOADED AS uploaded" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
