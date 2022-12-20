<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Refacct extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.refacct';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = '';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["tranno","pr","po","rr","apv","invoice","invvat","voucher","petcash","receipts","paydrcr","recdrcr","genj","stktran","invadj","retsupp","retcust","so","damage","othiss","corpuse","posret","deposit","salesbook","tranfle"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"TRANNO AS tranno", 
			"PR AS pr", 
			"PO AS po", 
			"RR AS rr", 
			"APV AS apv", 
			"INVOICE AS invoice", 
			"INVVAT AS invvat", 
			"VOUCHER AS voucher", 
			"PETCASH AS petcash", 
			"RECEIPTS AS receipts", 
			"PAYDRCR AS paydrcr", 
			"RECDRCR AS recdrcr", 
			"GENJ AS genj", 
			"STKTRAN AS stktran", 
			"INVADJ AS invadj", 
			"RETSUPP AS retsupp", 
			"RETCUST AS retcust", 
			"SO AS so", 
			"DAMAGE AS damage", 
			"OTHISS AS othiss", 
			"CORPUSE AS corpuse", 
			"POSRET AS posret", 
			"DEPOSIT AS deposit", 
			"SALESBOOK AS salesbook", 
			"TRANFLE AS tranfle" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"TRANNO AS tranno", 
			"PR AS pr", 
			"PO AS po", 
			"RR AS rr", 
			"APV AS apv", 
			"INVOICE AS invoice", 
			"INVVAT AS invvat", 
			"VOUCHER AS voucher", 
			"PETCASH AS petcash", 
			"RECEIPTS AS receipts", 
			"PAYDRCR AS paydrcr", 
			"RECDRCR AS recdrcr", 
			"GENJ AS genj", 
			"STKTRAN AS stktran", 
			"INVADJ AS invadj", 
			"RETSUPP AS retsupp", 
			"RETCUST AS retcust", 
			"SO AS so", 
			"DAMAGE AS damage", 
			"OTHISS AS othiss", 
			"CORPUSE AS corpuse", 
			"POSRET AS posret", 
			"DEPOSIT AS deposit", 
			"SALESBOOK AS salesbook", 
			"TRANFLE AS tranfle" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
