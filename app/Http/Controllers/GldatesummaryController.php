<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Gldatesummary;
use Illuminate\Http\Request;
use Exception;
class GldatesummaryController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Gldatesummary::query();
		if($request->search){
			$search = trim($request->search);
			Gldatesummary::search($query, $search);
		}
		$orderby = $request->orderby ?? "GLDATESUMMARY.date";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Gldatesummary::listFields());
		return $this->respond($records);
	}
}
