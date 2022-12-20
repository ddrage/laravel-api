<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserdevicesAddRequest;
use App\Http\Requests\UserdevicesEditRequest;
use App\Models\Userdevices;
use Illuminate\Http\Request;
use Exception;
class UserdevicesController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Userdevices::query();
		if($request->search){
			$search = trim($request->search);
			Userdevices::search($query, $search);
		}
		$orderby = $request->orderby ?? "UserDevices.periodid";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Userdevices::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Userdevices::query();
		$record = $query->findOrFail($rec_id, Userdevices::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(UserdevicesAddRequest $request){
		$modeldata = $request->validated();
		
		//save Userdevices record
		$record = Userdevices::create($modeldata);
		$rec_id = $record->periodid;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(UserdevicesEditRequest $request, $rec_id = null){
		$query = Userdevices::query();
		$record = $query->findOrFail($rec_id, Userdevices::editFields());
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
		$query = Userdevices::query();
		$query->whereIn("periodid", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
