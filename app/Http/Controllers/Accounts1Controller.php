<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Accounts1AddRequest;
use App\Http\Requests\Accounts1EditRequest;
use App\Models\Accounts1;
use Illuminate\Http\Request;
use Exception;
class Accounts1Controller extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Accounts1::query();
		if($request->search){
			$search = trim($request->search);
			Accounts1::search($query, $search);
		}
		$orderby = $request->orderby ?? "accounts1.acctcode";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Accounts1::listFields());
		return $this->respond($records);
	}
}
