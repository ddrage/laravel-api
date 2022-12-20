<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreditnoteAddRequest;
use App\Http\Requests\CreditnoteEditRequest;
use App\Models\Creditnote;
use Illuminate\Http\Request;
use Exception;
class CreditnoteController extends Controller
{
	

	/**
     * List table records
	 * @param  \Illuminate\Http\Request
     * @param string $fieldname //filter records by a table field
     * @param string $fieldvalue //filter value
     * @return \Illuminate\View\View
     */
	function index(Request $request, $fieldname = null , $fieldvalue = null){
		$query = Creditnote::query();
		if($request->search){
			$search = trim($request->search);
			Creditnote::search($query, $search);
		}
		$orderby = $request->orderby ?? "CreditNote.creditnoteno";
		$ordertype = $request->ordertype ?? "desc";
		$query->orderBy($orderby, $ordertype);
		if($fieldname){
			$query->where($fieldname , $fieldvalue); //filter by a single field name
		}
		$records = $this->paginate($query, Creditnote::listFields());
		return $this->respond($records);
	}
	

	/**
     * Select table record by ID
	 * @param string $rec_id
     * @return \Illuminate\View\View
     */
	function view($rec_id = null){
		$query = Creditnote::query();
		$record = $query->findOrFail($rec_id, Creditnote::viewFields());
		return $this->respond($record);
	}
	

	/**
     * Save form record to the table
     * @return \Illuminate\Http\Response
     */
	function add(CreditnoteAddRequest $request){
		$modeldata = $request->validated();
		
		//save Creditnote record
		$record = Creditnote::create($modeldata);
		$rec_id = $record->creditnoteno;
		return $this->respond($record);
	}
	

	/**
     * Update table record with form data
	 * @param string $rec_id //select record by table primary key
     * @return \Illuminate\View\View;
     */
	function edit(CreditnoteEditRequest $request, $rec_id = null){
		$query = Creditnote::query();
		$record = $query->findOrFail($rec_id, Creditnote::editFields());
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
		$query = Creditnote::query();
		$query->whereIn("creditnoteno", $arr_id);
		$query->delete();
		return $this->respond($arr_id);
	}
}
