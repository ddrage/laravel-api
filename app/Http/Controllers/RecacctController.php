<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\RecacctAddRequest;
use App\Http\Requests\RecacctEditRequest;
use App\Models\Recacct;
use Illuminate\Http\Request;
use Exception;
class RecacctController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Recacct::query();
		if($request->search){
			$search = trim($request->search);
			Recacct::search($query, $search);
		}
		$orderby = $request->orderby ?? "recacct.tranno";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Recacct::listFields());
		return $this->respond($records);
	}
}
