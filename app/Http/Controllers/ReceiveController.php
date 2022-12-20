<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReceiveAddRequest;
use App\Http\Requests\ReceiveEditRequest;
use App\Models\Receive;
use Illuminate\Http\Request;
use Exception;
class ReceiveController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Receive::query();
		if($request->search){
			$search = trim($request->search);
			Receive::search($query, $search);
		}
		$orderby = $request->orderby ?? "receive.trannum";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Receive::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Receive::query();
		$record = $query->findOrFail($rec_id, Receive::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(ReceiveAddRequest $request){
		$modeldata = $request->validated();
		
		//save Receive record
		$record = Receive::create($modeldata);
		$rec_id = $record->trannum;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(ReceiveEditRequest $request, $rec_id = null){
		$query = Receive::query();
		$record = $query->findOrFail($rec_id, Receive::editFields());
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
		$query = Receive::query();
		$query->whereIn("trannum", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
