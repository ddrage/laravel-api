<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\AccountstaxesAddRequest;
use App\Http\Requests\AccountstaxesEditRequest;
use App\Models\Accountstaxes;
use Illuminate\Http\Request;
use Exception;
class AccountstaxesController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Accountstaxes::query();
		if($request->search){
			$search = trim($request->search);
			Accountstaxes::search($query, $search);
		}
		$orderby = $request->orderby ?? "AccountsTaxes.accttaxid";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Accountstaxes::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Accountstaxes::query();
		$record = $query->findOrFail($rec_id, Accountstaxes::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(AccountstaxesAddRequest $request){
		$modeldata = $request->validated();
		
		//save Accountstaxes record
		$record = Accountstaxes::create($modeldata);
		$rec_id = $record->accttaxid;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(AccountstaxesEditRequest $request, $rec_id = null){
		$query = Accountstaxes::query();
		$record = $query->findOrFail($rec_id, Accountstaxes::editFields());
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
		$query = Accountstaxes::query();
		$query->whereIn("accttaxid", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
