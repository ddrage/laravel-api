<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Receive extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.receive';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'trannum';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["trantype","trannum","transcode","warecode","wareto","refdate","acctcode","terms","duedate","refdr","etw","refinv","amount","apvtype","apvnum","posted"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"TRANTYPE AS trantype", 
			"TRANNUM AS trannum", 
			"TRANSCODE AS transcode", 
			"WARECODE AS warecode", 
			"WARETO AS wareto", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"TERMS AS terms", 
			"DUEDATE AS duedate", 
			"REFDR AS refdr", 
			"ETW AS etw", 
			"REFINV AS refinv", 
			"AMOUNT AS amount", 
			"APVTYPE AS apvtype", 
			"APVNUM AS apvnum", 
			"POSTED AS posted" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"TRANTYPE AS trantype", 
			"TRANNUM AS trannum", 
			"TRANSCODE AS transcode", 
			"WARECODE AS warecode", 
			"WARETO AS wareto", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"TERMS AS terms", 
			"DUEDATE AS duedate", 
			"REFDR AS refdr", 
			"ETW AS etw", 
			"REFINV AS refinv", 
			"AMOUNT AS amount", 
			"APVTYPE AS apvtype", 
			"APVNUM AS apvnum", 
			"POSTED AS posted" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"TRANTYPE AS trantype", 
			"TRANNUM AS trannum", 
			"TRANSCODE AS transcode", 
			"WARECODE AS warecode", 
			"WARETO AS wareto", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"TERMS AS terms", 
			"DUEDATE AS duedate", 
			"REFDR AS refdr", 
			"ETW AS etw", 
			"REFINV AS refinv", 
			"AMOUNT AS amount", 
			"APVTYPE AS apvtype", 
			"APVNUM AS apvnum", 
			"POSTED AS posted" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"TRANTYPE AS trantype", 
			"TRANNUM AS trannum", 
			"TRANSCODE AS transcode", 
			"WARECODE AS warecode", 
			"WARETO AS wareto", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"TERMS AS terms", 
			"DUEDATE AS duedate", 
			"REFDR AS refdr", 
			"ETW AS etw", 
			"REFINV AS refinv", 
			"AMOUNT AS amount", 
			"APVTYPE AS apvtype", 
			"APVNUM AS apvnum", 
			"POSTED AS posted" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"TRANTYPE AS trantype", 
			"TRANNUM AS trannum", 
			"TRANSCODE AS transcode", 
			"WARECODE AS warecode", 
			"WARETO AS wareto", 
			"REFDATE AS refdate", 
			"ACCTCODE AS acctcode", 
			"TERMS AS terms", 
			"DUEDATE AS duedate", 
			"REFDR AS refdr", 
			"ETW AS etw", 
			"REFINV AS refinv", 
			"AMOUNT AS amount", 
			"APVTYPE AS apvtype", 
			"APVNUM AS apvnum", 
			"POSTED AS posted" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
