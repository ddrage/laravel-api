<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Secwin_Licence4AddRequest;
use App\Http\Requests\Secwin_Licence4EditRequest;
use App\Models\Secwin_Licence4;
use Illuminate\Http\Request;
use Exception;
class Secwin_Licence4Controller extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Secwin_Licence4::query();
		if($request->search){
			$search = trim($request->search);
			Secwin_Licence4::search($query, $search);
		}
		$orderby = $request->orderby ?? "secwin_licence4.lic_guid";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Secwin_Licence4::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Secwin_Licence4::query();
		$record = $query->findOrFail($rec_id, Secwin_Licence4::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(Secwin_Licence4AddRequest $request){
		$modeldata = $request->validated();
		
		//save Secwin_Licence4 record
		$record = Secwin_Licence4::create($modeldata);
		$rec_id = $record->lic_guid;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(Secwin_Licence4EditRequest $request, $rec_id = null){
		$query = Secwin_Licence4::query();
		$record = $query->findOrFail($rec_id, Secwin_Licence4::editFields());
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
		$query = Secwin_Licence4::query();
		$query->whereIn("lic_guid", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
