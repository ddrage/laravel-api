<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Secwin_QuerytableAddRequest;
use App\Http\Requests\Secwin_QuerytableEditRequest;
use App\Models\Secwin_Querytable;
use Illuminate\Http\Request;
use Exception;
class Secwin_QuerytableController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Secwin_Querytable::query();
		if($request->search){
			$search = trim($request->search);
			Secwin_Querytable::search($query, $search);
		}
		$orderby = $request->orderby ?? "secwin_querytable.field2";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Secwin_Querytable::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Secwin_Querytable::query();
		$record = $query->findOrFail($rec_id, Secwin_Querytable::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(Secwin_QuerytableAddRequest $request){
		$modeldata = $request->validated();
		
		//save Secwin_Querytable record
		$record = Secwin_Querytable::create($modeldata);
		$rec_id = $record->field2;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(Secwin_QuerytableEditRequest $request, $rec_id = null){
		$query = Secwin_Querytable::query();
		$record = $query->findOrFail($rec_id, Secwin_Querytable::editFields());
		if ($request->isMethod('post')) {
			$modeldata = $request->validated();
			$record->update($modeldata);
		}
		return $this->respond($record);
	}
	

	/**
     * Delete record from the database
	 * Support multi delete by separating record id by comma.
	 * @param  \Illuminate\Http\Request
	 * @param string $rec_id //can be separated by comma 
     * @return \Illuminate\Http\Response
     */
	function delete(Request $request, $rec_id = null){
		$arr_id = explode(",", $rec_id);
		$query = Secwin_Querytable::query();
		$query->whereIn("field2", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
