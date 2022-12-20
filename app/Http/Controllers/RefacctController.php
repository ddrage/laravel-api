<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\RefacctAddRequest;
use App\Http\Requests\RefacctEditRequest;
use App\Models\Refacct;
use Illuminate\Http\Request;
use Exception;
class RefacctController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Refacct::query();
		if($request->search){
			$search = trim($request->search);
			Refacct::search($query, $search);
		}
		$orderby = $request->orderby ?? "refacct.tranno";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Refacct::listFields());
		return $this->respond($records);
	}
}
