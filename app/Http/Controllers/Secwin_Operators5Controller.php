<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Secwin_Operators5AddRequest;
use App\Http\Requests\Secwin_Operators5EditRequest;
use App\Models\Secwin_Operators5;
use Illuminate\Http\Request;
use Exception;
class Secwin_Operators5Controller extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Secwin_Operators5::query();
		if($request->search){
			$search = trim($request->search);
			Secwin_Operators5::search($query, $search);
		}
		$orderby = $request->orderby ?? "secwin_operators5.ope5_guid";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Secwin_Operators5::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Secwin_Operators5::query();
		$record = $query->findOrFail($rec_id, Secwin_Operators5::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(Secwin_Operators5AddRequest $request){
		$modeldata = $request->validated();
		$modeldata['ope5_password'] = bcrypt($modeldata['ope5_password']);
		
		//save Secwin_Operators5 record
		$record = Secwin_Operators5::create($modeldata);
		$rec_id = $record->ope5_guid;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(Secwin_Operators5EditRequest $request, $rec_id = null){
		$query = Secwin_Operators5::query();
		$record = $query->findOrFail($rec_id, Secwin_Operators5::editFields());
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
		$query = Secwin_Operators5::query();
		$query->whereIn("ope5_guid", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
