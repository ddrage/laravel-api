<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\TrancodeAddRequest;
use App\Http\Requests\TrancodeEditRequest;
use App\Models\Trancode;
use Illuminate\Http\Request;
use Exception;
class TrancodeController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Trancode::query();
		if($request->search){
			$search = trim($request->search);
			Trancode::search($query, $search);
		}
		$orderby = $request->orderby ?? "trancode.transcode";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Trancode::listFields());
		return $this->respond($records);
	}
}
