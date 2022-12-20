<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\MysqlfileAddRequest;
use App\Http\Requests\MysqlfileEditRequest;
use App\Models\Mysqlfile;
use Illuminate\Http\Request;
use Exception;
class MysqlfileController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Mysqlfile::query();
		if($request->search){
			$search = trim($request->search);
			Mysqlfile::search($query, $search);
		}
		$orderby = $request->orderby ?? "MySQLFile.field1";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Mysqlfile::listFields());
		return $this->respond($records);
	}
}
