<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChecksAddRequest;
use App\Http\Requests\ChecksEditRequest;
use App\Models\Checks;
use Illuminate\Http\Request;
use Exception;
class ChecksController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Checks::query();
		if($request->search){
			$search = trim($request->search);
			Checks::search($query, $search);
		}
		$orderby = $request->orderby ?? "Checks.checknumber";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Checks::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Checks::query();
		$record = $query->findOrFail($rec_id, Checks::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(ChecksAddRequest $request){
		$modeldata = $request->validated();
		
		//save Checks record
		$record = Checks::create($modeldata);
		$rec_id = $record->checknumber;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(ChecksEditRequest $request, $rec_id = null){
		$query = Checks::query();
		$record = $query->findOrFail($rec_id, Checks::editFields());
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
		$query = Checks::query();
		$query->whereIn("checknumber", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
