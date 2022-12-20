<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\AccountgroupAddRequest;
use App\Http\Requests\AccountgroupEditRequest;
use App\Models\Accountgroup;
use Illuminate\Http\Request;
use Exception;
class AccountgroupController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Accountgroup::query();
		if($request->search){
			$search = trim($request->search);
			Accountgroup::search($query, $search);
		}
		$orderby = $request->orderby ?? "AccountGroup.accountgroupcode";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Accountgroup::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Accountgroup::query();
		$record = $query->findOrFail($rec_id, Accountgroup::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(AccountgroupAddRequest $request){
		$modeldata = $request->validated();
		
		//save Accountgroup record
		$record = Accountgroup::create($modeldata);
		$rec_id = $record->accountgroupcode;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(AccountgroupEditRequest $request, $rec_id = null){
		$query = Accountgroup::query();
		$record = $query->findOrFail($rec_id, Accountgroup::editFields());
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
		$query = Accountgroup::query();
		$query->whereIn("accountgroupcode", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
