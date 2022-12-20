<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Secwin_OperatorsusergroupsAddRequest;
use App\Http\Requests\Secwin_OperatorsusergroupsEditRequest;
use App\Models\Secwin_Operatorsusergroups;
use Illuminate\Http\Request;
use Exception;
class Secwin_OperatorsusergroupsController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Secwin_Operatorsusergroups::query();
		if($request->search){
			$search = trim($request->search);
			Secwin_Operatorsusergroups::search($query, $search);
		}
		$orderby = $request->orderby ?? "secwin_operatorsusergroups.oug_guid";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Secwin_Operatorsusergroups::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Secwin_Operatorsusergroups::query();
		$record = $query->findOrFail($rec_id, Secwin_Operatorsusergroups::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(Secwin_OperatorsusergroupsAddRequest $request){
		$modeldata = $request->validated();
		
		//save Secwin_Operatorsusergroups record
		$record = Secwin_Operatorsusergroups::create($modeldata);
		$rec_id = $record->oug_guid;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(Secwin_OperatorsusergroupsEditRequest $request, $rec_id = null){
		$query = Secwin_Operatorsusergroups::query();
		$record = $query->findOrFail($rec_id, Secwin_Operatorsusergroups::editFields());
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
		$query = Secwin_Operatorsusergroups::query();
		$query->whereIn("oug_guid", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
