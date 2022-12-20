<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Secwin_CountersAddRequest;
use App\Http\Requests\Secwin_CountersEditRequest;
use App\Models\Secwin_Counters;
use Illuminate\Http\Request;
use Exception;
class Secwin_CountersController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Secwin_Counters::query();
		if($request->search){
			$search = trim($request->search);
			Secwin_Counters::search($query, $search);
		}
		$orderby = $request->orderby ?? "secwin_counters.cou_guid";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Secwin_Counters::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Secwin_Counters::query();
		$record = $query->findOrFail($rec_id, Secwin_Counters::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(Secwin_CountersAddRequest $request){
		$modeldata = $request->validated();
		
		//save Secwin_Counters record
		$record = Secwin_Counters::create($modeldata);
		$rec_id = $record->cou_guid;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(Secwin_CountersEditRequest $request, $rec_id = null){
		$query = Secwin_Counters::query();
		$record = $query->findOrFail($rec_id, Secwin_Counters::editFields());
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
		$query = Secwin_Counters::query();
		$query->whereIn("cou_guid", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
