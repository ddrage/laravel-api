<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Secwin_Querytable extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.secwin_querytable';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'field2';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["field1","field2","field3","field4","field5","field6","field7","field8","field9","field10","field11","field12","field13","field14","field15","field16","field17","field18","field19","field20","field21","field22","field23","field24","field25","field26","field27","field28","field29","field30"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				FIELD1 LIKE ?  OR 
				FIELD2 LIKE ?  OR 
				FIELD3 LIKE ?  OR 
				FIELD4 LIKE ?  OR 
				FIELD5 LIKE ?  OR 
				FIELD6 LIKE ?  OR 
				FIELD7 LIKE ?  OR 
				FIELD8 LIKE ?  OR 
				FIELD9 LIKE ?  OR 
				FIELD10 LIKE ?  OR 
				FIELD11 LIKE ?  OR 
				FIELD12 LIKE ?  OR 
				FIELD13 LIKE ?  OR 
				FIELD14 LIKE ?  OR 
				FIELD15 LIKE ?  OR 
				FIELD16 LIKE ?  OR 
				FIELD17 LIKE ?  OR 
				FIELD18 LIKE ?  OR 
				FIELD19 LIKE ?  OR 
				FIELD20 LIKE ?  OR 
				FIELD21 LIKE ?  OR 
				FIELD22 LIKE ?  OR 
				FIELD23 LIKE ?  OR 
				FIELD24 LIKE ?  OR 
				FIELD25 LIKE ?  OR 
				FIELD26 LIKE ?  OR 
				FIELD27 LIKE ?  OR 
				FIELD28 LIKE ?  OR 
				FIELD29 LIKE ?  OR 
				FIELD30 LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
		];
		//setting search conditions
		$query->whereRaw($search_condition, $search_params);
	}
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"FIELD1 AS field1", 
			"FIELD2 AS field2", 
			"FIELD3 AS field3", 
			"FIELD4 AS field4", 
			"FIELD5 AS field5", 
			"FIELD6 AS field6", 
			"FIELD7 AS field7", 
			"FIELD8 AS field8", 
			"FIELD9 AS field9", 
			"FIELD10 AS field10", 
			"FIELD11 AS field11", 
			"FIELD12 AS field12", 
			"FIELD13 AS field13", 
			"FIELD14 AS field14", 
			"FIELD15 AS field15", 
			"FIELD16 AS field16", 
			"FIELD17 AS field17", 
			"FIELD18 AS field18", 
			"FIELD19 AS field19", 
			"FIELD20 AS field20", 
			"FIELD21 AS field21", 
			"FIELD22 AS field22", 
			"FIELD23 AS field23", 
			"FIELD24 AS field24", 
			"FIELD25 AS field25", 
			"FIELD26 AS field26", 
			"FIELD27 AS field27", 
			"FIELD28 AS field28", 
			"FIELD29 AS field29", 
			"FIELD30 AS field30" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"FIELD1 AS field1", 
			"FIELD2 AS field2", 
			"FIELD3 AS field3", 
			"FIELD4 AS field4", 
			"FIELD5 AS field5", 
			"FIELD6 AS field6", 
			"FIELD7 AS field7", 
			"FIELD8 AS field8", 
			"FIELD9 AS field9", 
			"FIELD10 AS field10", 
			"FIELD11 AS field11", 
			"FIELD12 AS field12", 
			"FIELD13 AS field13", 
			"FIELD14 AS field14", 
			"FIELD15 AS field15", 
			"FIELD16 AS field16", 
			"FIELD17 AS field17", 
			"FIELD18 AS field18", 
			"FIELD19 AS field19", 
			"FIELD20 AS field20", 
			"FIELD21 AS field21", 
			"FIELD22 AS field22", 
			"FIELD23 AS field23", 
			"FIELD24 AS field24", 
			"FIELD25 AS field25", 
			"FIELD26 AS field26", 
			"FIELD27 AS field27", 
			"FIELD28 AS field28", 
			"FIELD29 AS field29", 
			"FIELD30 AS field30" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"FIELD1 AS field1", 
			"FIELD2 AS field2", 
			"FIELD3 AS field3", 
			"FIELD4 AS field4", 
			"FIELD5 AS field5", 
			"FIELD6 AS field6", 
			"FIELD7 AS field7", 
			"FIELD8 AS field8", 
			"FIELD9 AS field9", 
			"FIELD10 AS field10", 
			"FIELD11 AS field11", 
			"FIELD12 AS field12", 
			"FIELD13 AS field13", 
			"FIELD14 AS field14", 
			"FIELD15 AS field15", 
			"FIELD16 AS field16", 
			"FIELD17 AS field17", 
			"FIELD18 AS field18", 
			"FIELD19 AS field19", 
			"FIELD20 AS field20", 
			"FIELD21 AS field21", 
			"FIELD22 AS field22", 
			"FIELD23 AS field23", 
			"FIELD24 AS field24", 
			"FIELD25 AS field25", 
			"FIELD26 AS field26", 
			"FIELD27 AS field27", 
			"FIELD28 AS field28", 
			"FIELD29 AS field29", 
			"FIELD30 AS field30" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"FIELD1 AS field1", 
			"FIELD2 AS field2", 
			"FIELD3 AS field3", 
			"FIELD4 AS field4", 
			"FIELD5 AS field5", 
			"FIELD6 AS field6", 
			"FIELD7 AS field7", 
			"FIELD8 AS field8", 
			"FIELD9 AS field9", 
			"FIELD10 AS field10", 
			"FIELD11 AS field11", 
			"FIELD12 AS field12", 
			"FIELD13 AS field13", 
			"FIELD14 AS field14", 
			"FIELD15 AS field15", 
			"FIELD16 AS field16", 
			"FIELD17 AS field17", 
			"FIELD18 AS field18", 
			"FIELD19 AS field19", 
			"FIELD20 AS field20", 
			"FIELD21 AS field21", 
			"FIELD22 AS field22", 
			"FIELD23 AS field23", 
			"FIELD24 AS field24", 
			"FIELD25 AS field25", 
			"FIELD26 AS field26", 
			"FIELD27 AS field27", 
			"FIELD28 AS field28", 
			"FIELD29 AS field29", 
			"FIELD30 AS field30" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"FIELD1 AS field1", 
			"FIELD2 AS field2", 
			"FIELD3 AS field3", 
			"FIELD4 AS field4", 
			"FIELD5 AS field5", 
			"FIELD6 AS field6", 
			"FIELD7 AS field7", 
			"FIELD8 AS field8", 
			"FIELD9 AS field9", 
			"FIELD10 AS field10", 
			"FIELD11 AS field11", 
			"FIELD12 AS field12", 
			"FIELD13 AS field13", 
			"FIELD14 AS field14", 
			"FIELD15 AS field15", 
			"FIELD16 AS field16", 
			"FIELD17 AS field17", 
			"FIELD18 AS field18", 
			"FIELD19 AS field19", 
			"FIELD20 AS field20", 
			"FIELD21 AS field21", 
			"FIELD22 AS field22", 
			"FIELD23 AS field23", 
			"FIELD24 AS field24", 
			"FIELD25 AS field25", 
			"FIELD26 AS field26", 
			"FIELD27 AS field27", 
			"FIELD28 AS field28", 
			"FIELD29 AS field29", 
			"FIELD30 AS field30" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
