<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Usersite extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.UserSite';
	

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
	protected $fillable = ["id","name","pw","auth_storeopen","auth_void","auth_refund","auth_suspend","auth_disc","auth_draw","auth_report","auth_prcovr","auth_safedrop","auth_cashout","auth_cashin","auth_closeshf","auth_closeday","auth_shfrep","auth_dayrep","auth_closerep","auth_xread","auth_cum","authcomt","keyprof","authacctreload","authacctrefund","authpayparking","number","token","auth_audit","auth_ekxread","level","auth_reprint","auth_yread","ambulant_outlet_id","ambulant_device_no","auth_reprintticket","auditwindow","mealstubquery","claimstubquery","uploaded"];
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				TOKEN LIKE ? 
		)';
		$search_params = [
			"%$text%"
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
			"ID AS id", 
			"NAME AS name", 
			"PW AS pw", 
			"AUTH:STOREOPEN AS auth_storeopen", 
			"AUTH:VOID AS auth_void", 
			"AUTH:REFUND AS auth_refund", 
			"AUTH:SUSPEND AS auth_suspend", 
			"AUTH:DISC AS auth_disc", 
			"AUTH:DRAW AS auth_draw", 
			"AUTH:REPORT AS auth_report", 
			"AUTH:PRCOVR AS auth_prcovr", 
			"AUTH:SAFEDROP AS auth_safedrop", 
			"AUTH:CASHOUT AS auth_cashout", 
			"AUTH:CASHIN AS auth_cashin", 
			"AUTH:CLOSESHF AS auth_closeshf", 
			"AUTH:CLOSEDAY AS auth_closeday", 
			"AUTH:SHFREP AS auth_shfrep", 
			"AUTH:DAYREP AS auth_dayrep", 
			"AUTH:CLOSEREP AS auth_closerep", 
			"AUTH:XREAD AS auth_xread", 
			"AUTH:CUM AS auth_cum", 
			"AUTHCOMT AS authcomt", 
			"KEYPROF AS keyprof", 
			"AUTHACCTRELOAD AS authacctreload", 
			"AUTHACCTREFUND AS authacctrefund", 
			"AUTHPAYPARKING AS authpayparking", 
			"NUMBER AS number", 
			"TOKEN AS token", 
			"AUTH:AUDIT AS auth_audit", 
			"AUTH:EKXREAD AS auth_ekxread", 
			"LEVEL AS level", 
			"AUTH:REPRINT AS auth_reprint", 
			"AUTH:YREAD AS auth_yread", 
			"AMBULANT_OUTLET_ID AS ambulant_outlet_id", 
			"AMBULANT_DEVICE_NO AS ambulant_device_no", 
			"AUTH:REPRINTTICKET AS auth_reprintticket", 
			"AUDITWINDOW AS auditwindow", 
			"MEALSTUBQUERY AS mealstubquery", 
			"CLAIMSTUBQUERY AS claimstubquery", 
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
			"NAME AS name", 
			"PW AS pw", 
			"AUTH:STOREOPEN AS auth_storeopen", 
			"AUTH:VOID AS auth_void", 
			"AUTH:REFUND AS auth_refund", 
			"AUTH:SUSPEND AS auth_suspend", 
			"AUTH:DISC AS auth_disc", 
			"AUTH:DRAW AS auth_draw", 
			"AUTH:REPORT AS auth_report", 
			"AUTH:PRCOVR AS auth_prcovr", 
			"AUTH:SAFEDROP AS auth_safedrop", 
			"AUTH:CASHOUT AS auth_cashout", 
			"AUTH:CASHIN AS auth_cashin", 
			"AUTH:CLOSESHF AS auth_closeshf", 
			"AUTH:CLOSEDAY AS auth_closeday", 
			"AUTH:SHFREP AS auth_shfrep", 
			"AUTH:DAYREP AS auth_dayrep", 
			"AUTH:CLOSEREP AS auth_closerep", 
			"AUTH:XREAD AS auth_xread", 
			"AUTH:CUM AS auth_cum", 
			"AUTHCOMT AS authcomt", 
			"KEYPROF AS keyprof", 
			"AUTHACCTRELOAD AS authacctreload", 
			"AUTHACCTREFUND AS authacctrefund", 
			"AUTHPAYPARKING AS authpayparking", 
			"NUMBER AS number", 
			"TOKEN AS token", 
			"AUTH:AUDIT AS auth_audit", 
			"AUTH:EKXREAD AS auth_ekxread", 
			"LEVEL AS level", 
			"AUTH:REPRINT AS auth_reprint", 
			"AUTH:YREAD AS auth_yread", 
			"AMBULANT_OUTLET_ID AS ambulant_outlet_id", 
			"AMBULANT_DEVICE_NO AS ambulant_device_no", 
			"AUTH:REPRINTTICKET AS auth_reprintticket", 
			"AUDITWINDOW AS auditwindow", 
			"MEALSTUBQUERY AS mealstubquery", 
			"CLAIMSTUBQUERY AS claimstubquery", 
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
			"NAME AS name", 
			"PW AS pw", 
			"AUTH:STOREOPEN AS auth_storeopen", 
			"AUTH:VOID AS auth_void", 
			"AUTH:REFUND AS auth_refund", 
			"AUTH:SUSPEND AS auth_suspend", 
			"AUTH:DISC AS auth_disc", 
			"AUTH:DRAW AS auth_draw", 
			"AUTH:REPORT AS auth_report", 
			"AUTH:PRCOVR AS auth_prcovr", 
			"AUTH:SAFEDROP AS auth_safedrop", 
			"AUTH:CASHOUT AS auth_cashout", 
			"AUTH:CASHIN AS auth_cashin", 
			"AUTH:CLOSESHF AS auth_closeshf", 
			"AUTH:CLOSEDAY AS auth_closeday", 
			"AUTH:SHFREP AS auth_shfrep", 
			"AUTH:DAYREP AS auth_dayrep", 
			"AUTH:CLOSEREP AS auth_closerep", 
			"AUTH:XREAD AS auth_xread", 
			"AUTH:CUM AS auth_cum", 
			"AUTHCOMT AS authcomt", 
			"KEYPROF AS keyprof", 
			"AUTHACCTRELOAD AS authacctreload", 
			"AUTHACCTREFUND AS authacctrefund", 
			"AUTHPAYPARKING AS authpayparking", 
			"NUMBER AS number", 
			"TOKEN AS token", 
			"AUTH:AUDIT AS auth_audit", 
			"AUTH:EKXREAD AS auth_ekxread", 
			"LEVEL AS level", 
			"AUTH:REPRINT AS auth_reprint", 
			"AUTH:YREAD AS auth_yread", 
			"AMBULANT_OUTLET_ID AS ambulant_outlet_id", 
			"AMBULANT_DEVICE_NO AS ambulant_device_no", 
			"AUTH:REPRINTTICKET AS auth_reprintticket", 
			"AUDITWINDOW AS auditwindow", 
			"MEALSTUBQUERY AS mealstubquery", 
			"CLAIMSTUBQUERY AS claimstubquery", 
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
			"NAME AS name", 
			"PW AS pw", 
			"AUTH:STOREOPEN AS auth_storeopen", 
			"AUTH:VOID AS auth_void", 
			"AUTH:REFUND AS auth_refund", 
			"AUTH:SUSPEND AS auth_suspend", 
			"AUTH:DISC AS auth_disc", 
			"AUTH:DRAW AS auth_draw", 
			"AUTH:REPORT AS auth_report", 
			"AUTH:PRCOVR AS auth_prcovr", 
			"AUTH:SAFEDROP AS auth_safedrop", 
			"AUTH:CASHOUT AS auth_cashout", 
			"AUTH:CASHIN AS auth_cashin", 
			"AUTH:CLOSESHF AS auth_closeshf", 
			"AUTH:CLOSEDAY AS auth_closeday", 
			"AUTH:SHFREP AS auth_shfrep", 
			"AUTH:DAYREP AS auth_dayrep", 
			"AUTH:CLOSEREP AS auth_closerep", 
			"AUTH:XREAD AS auth_xread", 
			"AUTH:CUM AS auth_cum", 
			"AUTHCOMT AS authcomt", 
			"KEYPROF AS keyprof", 
			"AUTHACCTRELOAD AS authacctreload", 
			"AUTHACCTREFUND AS authacctrefund", 
			"AUTHPAYPARKING AS authpayparking", 
			"NUMBER AS number", 
			"TOKEN AS token", 
			"AUTH:AUDIT AS auth_audit", 
			"AUTH:EKXREAD AS auth_ekxread", 
			"LEVEL AS level", 
			"AUTH:REPRINT AS auth_reprint", 
			"AUTH:YREAD AS auth_yread", 
			"AMBULANT_OUTLET_ID AS ambulant_outlet_id", 
			"AMBULANT_DEVICE_NO AS ambulant_device_no", 
			"AUTH:REPRINTTICKET AS auth_reprintticket", 
			"AUDITWINDOW AS auditwindow", 
			"MEALSTUBQUERY AS mealstubquery", 
			"CLAIMSTUBQUERY AS claimstubquery", 
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
			"NAME AS name", 
			"PW AS pw", 
			"AUTH:STOREOPEN AS auth_storeopen", 
			"AUTH:VOID AS auth_void", 
			"AUTH:REFUND AS auth_refund", 
			"AUTH:SUSPEND AS auth_suspend", 
			"AUTH:DISC AS auth_disc", 
			"AUTH:DRAW AS auth_draw", 
			"AUTH:REPORT AS auth_report", 
			"AUTH:PRCOVR AS auth_prcovr", 
			"AUTH:SAFEDROP AS auth_safedrop", 
			"AUTH:CASHOUT AS auth_cashout", 
			"AUTH:CASHIN AS auth_cashin", 
			"AUTH:CLOSESHF AS auth_closeshf", 
			"AUTH:CLOSEDAY AS auth_closeday", 
			"AUTH:SHFREP AS auth_shfrep", 
			"AUTH:DAYREP AS auth_dayrep", 
			"AUTH:CLOSEREP AS auth_closerep", 
			"AUTH:XREAD AS auth_xread", 
			"AUTH:CUM AS auth_cum", 
			"AUTHCOMT AS authcomt", 
			"KEYPROF AS keyprof", 
			"AUTHACCTRELOAD AS authacctreload", 
			"AUTHACCTREFUND AS authacctrefund", 
			"AUTHPAYPARKING AS authpayparking", 
			"NUMBER AS number", 
			"TOKEN AS token", 
			"AUTH:AUDIT AS auth_audit", 
			"AUTH:EKXREAD AS auth_ekxread", 
			"LEVEL AS level", 
			"AUTH:REPRINT AS auth_reprint", 
			"AUTH:YREAD AS auth_yread", 
			"AMBULANT_OUTLET_ID AS ambulant_outlet_id", 
			"AMBULANT_DEVICE_NO AS ambulant_device_no", 
			"AUTH:REPRINTTICKET AS auth_reprintticket", 
			"AUDITWINDOW AS auditwindow", 
			"MEALSTUBQUERY AS mealstubquery", 
			"CLAIMSTUBQUERY AS claimstubquery", 
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
