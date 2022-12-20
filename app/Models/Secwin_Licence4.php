<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Secwin_Licence4 extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'dbo.secwin_licence4';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'lic_guid';
	public $incrementing = false;
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = ["lic_guid","lic_sitelimiter","lic_licencedto","lic_dealer","lic_product","lic_copies","lic_level","lic_lastrundate","lic_appnumber","lic_serialnumber","lic_modules","lic_licencetype","lic_other1","lic_additionalstring1","lic_additionalstring2","lic_additionalstring3","lic_additionallong1","lic_additionallong2","lic_expirydate","lic_crclen","lic_crc"];
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"LIC_GUID AS lic_guid", 
			"LIC_SITELIMITER AS lic_sitelimiter", 
			"LIC_LICENCEDTO AS lic_licencedto", 
			"LIC_DEALER AS lic_dealer", 
			"LIC_PRODUCT AS lic_product", 
			"LIC_COPIES AS lic_copies", 
			"LIC_LEVEL AS lic_level", 
			"LIC_LASTRUNDATE AS lic_lastrundate", 
			"LIC_APPNUMBER AS lic_appnumber", 
			"LIC_SERIALNUMBER AS lic_serialnumber", 
			"LIC_MODULES AS lic_modules", 
			"LIC_LICENCETYPE AS lic_licencetype", 
			"LIC_OTHER1 AS lic_other1", 
			"LIC_ADDITIONALSTRING1 AS lic_additionalstring1", 
			"LIC_ADDITIONALSTRING2 AS lic_additionalstring2", 
			"LIC_ADDITIONALSTRING3 AS lic_additionalstring3", 
			"LIC_ADDITIONALLONG1 AS lic_additionallong1", 
			"LIC_ADDITIONALLONG2 AS lic_additionallong2", 
			"LIC_EXPIRYDATE AS lic_expirydate", 
			"LIC_CRCLEN AS lic_crclen", 
			"LIC_CRC AS lic_crc" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"LIC_GUID AS lic_guid", 
			"LIC_SITELIMITER AS lic_sitelimiter", 
			"LIC_LICENCEDTO AS lic_licencedto", 
			"LIC_DEALER AS lic_dealer", 
			"LIC_PRODUCT AS lic_product", 
			"LIC_COPIES AS lic_copies", 
			"LIC_LEVEL AS lic_level", 
			"LIC_LASTRUNDATE AS lic_lastrundate", 
			"LIC_APPNUMBER AS lic_appnumber", 
			"LIC_SERIALNUMBER AS lic_serialnumber", 
			"LIC_MODULES AS lic_modules", 
			"LIC_LICENCETYPE AS lic_licencetype", 
			"LIC_OTHER1 AS lic_other1", 
			"LIC_ADDITIONALSTRING1 AS lic_additionalstring1", 
			"LIC_ADDITIONALSTRING2 AS lic_additionalstring2", 
			"LIC_ADDITIONALSTRING3 AS lic_additionalstring3", 
			"LIC_ADDITIONALLONG1 AS lic_additionallong1", 
			"LIC_ADDITIONALLONG2 AS lic_additionallong2", 
			"LIC_EXPIRYDATE AS lic_expirydate", 
			"LIC_CRCLEN AS lic_crclen", 
			"LIC_CRC AS lic_crc" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"LIC_GUID AS lic_guid", 
			"LIC_SITELIMITER AS lic_sitelimiter", 
			"LIC_LICENCEDTO AS lic_licencedto", 
			"LIC_DEALER AS lic_dealer", 
			"LIC_PRODUCT AS lic_product", 
			"LIC_COPIES AS lic_copies", 
			"LIC_LEVEL AS lic_level", 
			"LIC_LASTRUNDATE AS lic_lastrundate", 
			"LIC_APPNUMBER AS lic_appnumber", 
			"LIC_SERIALNUMBER AS lic_serialnumber", 
			"LIC_MODULES AS lic_modules", 
			"LIC_LICENCETYPE AS lic_licencetype", 
			"LIC_OTHER1 AS lic_other1", 
			"LIC_ADDITIONALSTRING1 AS lic_additionalstring1", 
			"LIC_ADDITIONALSTRING2 AS lic_additionalstring2", 
			"LIC_ADDITIONALSTRING3 AS lic_additionalstring3", 
			"LIC_ADDITIONALLONG1 AS lic_additionallong1", 
			"LIC_ADDITIONALLONG2 AS lic_additionallong2", 
			"LIC_EXPIRYDATE AS lic_expirydate", 
			"LIC_CRCLEN AS lic_crclen", 
			"LIC_CRC AS lic_crc" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"LIC_GUID AS lic_guid", 
			"LIC_SITELIMITER AS lic_sitelimiter", 
			"LIC_LICENCEDTO AS lic_licencedto", 
			"LIC_DEALER AS lic_dealer", 
			"LIC_PRODUCT AS lic_product", 
			"LIC_COPIES AS lic_copies", 
			"LIC_LEVEL AS lic_level", 
			"LIC_LASTRUNDATE AS lic_lastrundate", 
			"LIC_APPNUMBER AS lic_appnumber", 
			"LIC_SERIALNUMBER AS lic_serialnumber", 
			"LIC_MODULES AS lic_modules", 
			"LIC_LICENCETYPE AS lic_licencetype", 
			"LIC_OTHER1 AS lic_other1", 
			"LIC_ADDITIONALSTRING1 AS lic_additionalstring1", 
			"LIC_ADDITIONALSTRING2 AS lic_additionalstring2", 
			"LIC_ADDITIONALSTRING3 AS lic_additionalstring3", 
			"LIC_ADDITIONALLONG1 AS lic_additionallong1", 
			"LIC_ADDITIONALLONG2 AS lic_additionallong2", 
			"LIC_EXPIRYDATE AS lic_expirydate", 
			"LIC_CRCLEN AS lic_crclen", 
			"LIC_CRC AS lic_crc" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"LIC_GUID AS lic_guid", 
			"LIC_SITELIMITER AS lic_sitelimiter", 
			"LIC_LICENCEDTO AS lic_licencedto", 
			"LIC_DEALER AS lic_dealer", 
			"LIC_PRODUCT AS lic_product", 
			"LIC_COPIES AS lic_copies", 
			"LIC_LEVEL AS lic_level", 
			"LIC_LASTRUNDATE AS lic_lastrundate", 
			"LIC_APPNUMBER AS lic_appnumber", 
			"LIC_SERIALNUMBER AS lic_serialnumber", 
			"LIC_MODULES AS lic_modules", 
			"LIC_LICENCETYPE AS lic_licencetype", 
			"LIC_OTHER1 AS lic_other1", 
			"LIC_ADDITIONALSTRING1 AS lic_additionalstring1", 
			"LIC_ADDITIONALSTRING2 AS lic_additionalstring2", 
			"LIC_ADDITIONALSTRING3 AS lic_additionalstring3", 
			"LIC_ADDITIONALLONG1 AS lic_additionallong1", 
			"LIC_ADDITIONALLONG2 AS lic_additionallong2", 
			"LIC_EXPIRYDATE AS lic_expirydate", 
			"LIC_CRCLEN AS lic_crclen", 
			"LIC_CRC AS lic_crc" 
		];
	}
	

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
	public $timestamps = false;
}
